@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="panel panel-default">
                    <div class="panel-heading">Venta</div>
                    <div class="panel-body">
                        <div class="row">
                            {!!Form::open(['class'=>'navbar-form navbar-left', 'role'=>'search'])!!}
                            <div class="form-group">
                                {!! Form::text('seach', null, ['class'=> 'form-control', 'placeholder'=> 'Buscar'])!!}
                            </div>
                            <button type="submit" class="btn btn-default">Buscar</button>
                            <button class="btn btn-primary">Agregar</button>
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
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class=" panel panel-default total-venta text-center">
                    <h1><strong>45.000</strong></h1>
                </div>
            </div>
        </div>
    </div>
@endsection
