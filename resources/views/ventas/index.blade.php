@extends('app')

@section('content')
    <div class="container" ng-app="ventasApp">
        <div class="row">
            <div class="col-md-7">
                <div class="panel panel-default" ng-controller="BusquedaController">
                    <div class="panel-heading">Venta</div>
                    <div class="panel-body">
                        <div class="row">
                        <div class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                               <input type="text" ng-model="asyncSelected" placeholder="Busqueda de producto" typeahead="item.nombre for item in getLocation($viewValue)" typeahead-on-select="addProducto($item)" typeahead-loading="loadingLocations" class="form-control">
                               <i ng-show="loadingLocations" class="glyphicon glyphicon-refresh"></i>
                            </div>
                            <button class="btn btn-default" ng-click="limpiarLista()">Limpiar</button>
                            <button class="btn btn-primary">Cerrar</button>
                            </div>
                        </div>
                        <div class="row detalle-venta">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Descripcion</th>
                                        <th>cantidad</th>
                                        <th>valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="prod in productos">
                                        <td>@{{ prod.nombre }}</td>
                                        <td>@{{ prod.descripcion_corta }}</td>
                                        <td>1</td>
                                        <td>@{{ prod.precio_venta }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class=" panel panel-default total-venta text-center" ng-controller="totalController">
                    <h1><strong>@{{ valorTotal }}</strong></h1>
                </div>
            </div>
        </div>
    </div>
@endsection
