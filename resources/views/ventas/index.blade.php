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
                                <form ng-submit="codesearch()">
                                    <div class="form-group">
                                        <label for="">Busqueda por codigo:</label>
                                        <input type="text" ng-model="searchcode" placeholder="codigo de producto" class="form-control" autofocus tabindex="1">
                                    </div>
                                </form>
                            </div>
                            <div class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <label for="">Busqueda por nombre:</label>
                                    <input type="text" ng-model="searchText" placeholder="nombre de producto" typeahead="item.nombre for item in getLocation($viewValue)" typeahead-on-select="addProducto($item)" typeahead-loading="loadingLocations" class="form-control">
                                    <i ng-show="loadingLocations" class="glyphicon glyphicon-refresh"></i>
                                </div>
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
                                    <td><input class="cant_prod form-control" type="number" min="1" ng-model="prod.cant_venta" ng-change="updateCantProd(prod)" value="@{{prod.cant_venta}}"/></td>
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

                            <form ng-submit="buscarDescuento()">
                                <div class="form-group">
                                    <input type="text" ng-model="desc_seach" class="form-control"/>
                                    <button class="btn btn-primary">agregar</button>
                                </div>
                            </form>
                        </div>
                        <br/>
                        <ul class="list-group" ng-repeat="desc in descuentos">
                            <li class="list-group-item">@{{ desc.titulo }}<span class="badge"><i ng-click="clearDesc()" class="glyphicon glyphicon-remove"></i></span></li>

                        </ul>
                    </div>
                </div>
                <button class="btn btn-success" data-toggle="modal" data-target="#paymodal" tabindex="2">PAGAR</button>
                <button class="btn btn-danger" ng-click="clearAll()">Eliminar Todo</button>
            </div>
        </div>
        <!-- start pay modal -->
        <div class="modal fade" id="paymodal" tabindex="-10" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Ultimo Paso - Pagar</h4>
                    </div>
                    <div class="modal-body">
                        <form ng-submit="cerrarVenta()">
                            <div class="row">
                                @{{ valorTotal }}
                                <div class="col-md-6">
                                    <label for=""><strong>Cancela con:</strong></label>
                                    <input type="text" ng-model="pagacon" class="form-control" autofocus/>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><strong>Tipo pago:</strong></label>
                                    <div class="row">
                                        <label class="tipo_pago"><input ng-model="tipo_pago" name="tipo_pago" value="contado" type="radio" checked>Contado </label>
                                        <label class="tipo_pago"><input ng-model="tipo_pago" name="tipo_pago" value="debito" type="radio">Debito </label>
                                        <label class="tipo_pago"><input ng-model="tipo_pago" name="tipo_pago" value="credito" type="radio">Credito </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                        <button type="button" class="btn btn-success" ng-click="cerrarVenta()">Terminar venta</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end pay modal -->
    </div>
@endsection
