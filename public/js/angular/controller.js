angular.module("ventasApp", ['ui.bootstrap', 'LocalStorageModule'])
    .service('manejadorVenta', function (localStorageService) {

        this.key = 'venta';
        this.ventakey ='total';
        if(localStorageService.get(this.key)) {
            this.productos = localStorageService.get(this.key);
        }
        else{
            this.productos = [];
        }
        if(localStorageService.get(this.ventakey)) {
            this.valorTotal = localStorageService.get(this.ventakey);
        }
        else{
            this.valorTotal = 0;
        }

        this.add = function (prod) {
            this.productos.push(prod);
            this.updateLocalStorage();
            this.updateTotal();
        };

        this.updateLocalStorage = function () {
            localStorageService.set(this.key, this.productos);
        };

        this.updateTotal = function () {
            var subtotal = 0;
            angular.forEach(this.productos, function (item) {
                subtotal += parseInt(item.precio_venta);
            });
            this.valorTotal = subtotal;
            localStorageService.set(this.ventakey, this.valorTotal);
        };

        this.clean = function () {
            this.productos = [];
            this.updateLocalStorage();
            return this.getAll();
        };

        this.getAll = function () {
            return this.productos;
        };

        this.removeItem = function (item) {
            this.productos = this.productos.filter(function(prod) {
                return prod !== item;
            });
            this.updateLocalStorage();
            return this.getAll();
        };

        this.getValorTotal = function () {
            return this.valorTotal;
        };

    })
    .controller("VentasController", function($scope, $http, manejadorVenta){

        $scope.getLocation = function(val) {
            return $http.get('http://localhost:8000/hola/', {
                params: {
                    nombre: val
                }
            }).then(function(response){
                return response.data.map(function(item){
                    return item;
                });
            });
        };
        $scope.$apply(function () {
            $scope.valorTotal = manejadorVenta.getValorTotal();
        });
        $scope.productos = manejadorVenta.getAll();

        $scope.newProd ={};
        $scope.addProducto = function(prod) {
            $scope.newProd=prod;
            manejadorVenta.add($scope.newProd);
            $scope.newProd ={};

        };
        $scope.clearAll = function () {
            manejadorVenta.clean();
        }

    })