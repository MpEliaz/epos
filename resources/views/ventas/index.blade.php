@extends('app')

@section('content')
    <div class="container" ng-app="ventasApp" ng-controller="VentasController">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Venta</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <input type="text" ng-model="searchText" placeholder="Busqueda de producto" typeahead="item.nombre for item in getLocation($item.codigo)" typeahead-on-select="addProducto($item)" typeahead-loading="loadingLocations" class="form-control">
                                    <i ng-show="loadingLocations" class="glyphicon glyphicon-refresh"></i>
                                </div>
                                <button class="btn btn-danger" ng-click="clearAll()">Eliminar Todo</button>
                                <button class="btn btn-primary">Cerrar</button>
                            </div>
                        </div>
                        <div class="row detalle-venta">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Descripcion</th>
                                    <th>Cantidad</th>
                                    <th>Valor Uni</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr ng-repeat="prod in productos">
                                    <td>@{{ prod.nombre }}</td>
                                    <td>@{{ prod.descripcion_corta }}</td>
                                    <td><input class="cant_prod form-control" type="number" min="1" ng-model="prod.cant_venta" ng-change="updateCantProd()" value="@{{prod.cant_venta}}"/></td>
                                    <td>@{{ prod.precio_venta | currency:undefined:0 }}</td>
                                    <td><i ng-click="removeProd(prod)" class="fa fa-trash-o"></i></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">TOTAL</div>
                    <div class="panel-body">
                        <div class=" panel panel-default total-venta text-center">
                            <h1><strong>@{{ valorTotal | currency:undefined:0 }}</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Descuentos</div>
                    <div class="panel-body">
                        <div class="form-inline">
                            <label for=""><strong>Agregar Codigo Descuento:</strong></label>
                            <div class="form-group">
                                <input type="text" ng-model="desc_seach" class="form-control"/>
                                <button class="btn btn-primary" ng-click="buscarDescuento()">agregar</button>
                            </div>
                        </div>
                        <br/>
                        <ul class="list-group" ng-repeat="desc in descuentos">
                            <li class="list-group-item">@{{ desc.titulo }}<span class="badge"><i ng-click="clearDesc()" class="glyphicon glyphicon-remove"></i></span></li>

                        </ul>
                    </div>
                </div>
                <button class="btn btn-success" ng-click="cerrarVenta()">PAGAR</button>
            </div>
        </div>
    </div>
    </div>
@endsection
