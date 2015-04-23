<div class="col-md-6">
    <div class="form-group">
        {!!Form::label('nombre', 'Nombre',['class' => 'col-md-4'])!!}
        <div class="col-sm-8">
            {!!Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre de producto'])!!}
        </div>
    </div>
    <div class="form-group">
        {!!Form::label('id_marca', 'Marca',['class' => 'col-sm-4'])!!}
        <div class="col-sm-8">
            {!!Form::text('id_marca', null, ['class' => 'form-control', 'placeholder' => 'Marca del producto'])!!}
        </div>
    </div>
    <div class="form-group">
        {!!Form::label('modelo', 'Modelo',['class' => 'col-md-4'])!!}
        <div class="col-sm-8">
            {!!Form::text('modelo', null, ['class' => 'form-control', 'placeholder' => 'Modelo del producto'])!!}
        </div>
    </div>
    <div class="form-group">
        {!!Form::label('descripcion_corta', 'Descripción Corta',['class' => 'col-md-4'])!!}
        <div class="col-sm-8">
            {!!Form::text('descripcion_corta', null, ['class' => 'form-control', 'placeholder' => 'Breve descripción'])!!}
        </div>
    </div>
    <div class="form-group">
        {!!Form::label('descripcion', 'Descripción Larga',['class' => 'col-md-4'])!!}
        <div class="col-sm-8">
            {!! Form::textarea('descripcion', null, ['size' => '30x10', 'class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        {!!Form::label('precio_costo', 'Precio Costo',['class' => 'col-md-4'])!!}
        <div class="col-sm-8">
            {!!Form::text('precio_costo', null, ['class' => 'form-control', 'placeholder' => 'Precio Costo'])!!}
        </div>
    </div>
    <div class="form-group">
        {!!Form::label('precio_venta', 'Precio Venta',['class' => 'col-md-4'])!!}
        <div class="col-sm-8">
            {!!Form::text('precio_venta', null, ['class' => 'form-control', 'placeholder' => 'Precio Venta'])!!}
        </div>
    </div>
    <div class="form-group">
        {!!Form::label('stock', 'Stock',['class' => 'col-sm-4'])!!}
        <div class="col-sm-8">
            {!!Form::number('stock', null, ['class' => 'form-control', 'placeholder' => 'Stock'])!!}
        </div>
    </div>
    <div class="form-group">
        {!!Form::label('codigo', 'Codigo',['class' => 'col-sm-4'])!!}
        <div class="col-sm-8">
            {!!Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'Stock'])!!}
        </div>
    </div>
    <div class="form-group">
        {!!Form::label('estado', 'Estado',['class' => 'col-sm-4'])!!}
        <div class="col-sm-8">
            {!!Form::checkbox('estado', null, ['class' => 'form-control'])!!}
        </div>
    </div>
    <div class="form-group">
        {!!Form::label('fecha_ingreso', 'Fecha Ingreso',['class' => 'col-sm-4'])!!}
        <div class="col-sm-8">
            {!!Form::text('fecha_ingreso', null, ['class' => 'form-control', 'placeholder' => 'Fecha Ingreso'])!!}

        </div>
    </div>
</div>


