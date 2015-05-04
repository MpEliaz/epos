angular.module("ventasApp", ['ui.bootstrap', 'LocalStorageModule'])
    .service('manejadorVenta', function (localStorageService) {

        this.key = 'venta';
        if(localStorageService.get(this.key)) {
            this.productos = localStorageService.get(this.key);
        }
        else{
            this.productos = [];
        }

        this.add = function (prod) {
            this.productos.push(prod);
            this.updateLocalStorage();
        };

        this.updateLocalStorage = function () {
            localStorageService.set(this.key, this.productos);
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
            angular.forEach(this.productos, function (item) {
               $scope.valortTotal += item.valor_venta;
            });
            return $scope.valortTotal;
        };

    })
    .controller("BusquedaController", function($scope, $http, manejadorVenta){

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

        $scope.productos = manejadorVenta.getAll();
        $scope.newProd ={};
        $scope.addProducto = function(prod) {

            console.log(prod);
            $scope.newProd=prod;
            manejadorVenta.add($scope.newProd);
            $scope.newProd ={};

        };
    }).controller("totalController", function($scope, manejadorVenta) {
        $scope.valorTotal=2000;
        manejadorVenta.getValorTotal();
    });