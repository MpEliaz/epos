@extends('app')

@section('content')
<div class="container">
	<div class="col-md-6">
        {!! Form::open(array('url' => 'productos/store', 'class' => 'form-horizontal')) !!}
            <div class="form-group">
                <label for="nombre" class="col-sm-4 control-label">Nombre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre de producto">
                </div>
            </div>
            <div class="form-group">
                <label for="descripcion_corta" class="col-sm-4 control-label">Descripción Corta</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="descripcion_corta" placeholder="Breve descripción">
                </div>
            </div>
            <div class="form-group">
                <label for="descripcion_larga" class="col-sm-4 control-label">Descripción Larga</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="descripcion_larga" placeholder="Descripción extensa">
                </div>
            </div>
            <div class="form-group">
            	<label for="marca" class="col-sm-4 control-label">Marca</label>
            	<div class="col-sm-8">
            		<input type="text" class="form-control" id="marca" placeholder="Marca">
            	</div>
            </div>
            <div class="form-group">
            	<label for="modelo" class="col-sm-4 control-label">Modelo</label>
            	<div class="col-sm-8">
            		<input type="text" class="form-control" id="modelo" placeholder="modelo">
            	</div>
            </div>
            <div class="form-group">
            	<label for="precio_costo" class="col-sm-4 control-label">Precio Costo</label>
            	<div class="col-sm-8">
            		<input type="text" class="form-control" id="precio_costo" placeholder="Precio Costo">
            	</div>
            </div>
            <div class="form-group">
            	<label for="precio_venta" class="col-sm-4 control-label">Precio Venta</label>
            	<div class="col-sm-8">
            		<input type="text" class="form-control" id="precio_venta" placeholder="Precio Venta">
            	</div>
            </div>
            <div class="form-group">
            	<label for="stock" class="col-sm-4 control-label">Stock</label>
            	<div class="col-sm-8">
            		<input type="number" class="form-control" id="stock" placeholder="Stock">
            	</div>
            </div>
            <div class="form-group">
            	<label for="codigo" class="col-sm-4 control-label">Codigo</label>
            	<div class="col-sm-8">
            		<input type="text" class="form-control" id="codigo" placeholder="Codigo">
            	</div>
            </div>
            <div class="form-group">
            	<label for="estado" class="col-sm-4 control-label">Estado</label>
            	<div class="col-sm-8">
            		<input type="text" class="form-control" id="estado" placeholder="modelo">
            	</div>
            </div>
            <div class="form-group">
            	<label for="fecha_ingreso" class="col-sm-4 control-label">Fecha Ingreso</label>
            	<div class="col-sm-8">
            		<input type="text" class="form-control" id="fecha_ingreso" placeholder="Fecha Ingreso">
            	</div>
            </div>
             <button type="submit" class="btn btn-default">Guardar</button>
        {!! Form::close() !!}
	</div>
</div>
@endsection