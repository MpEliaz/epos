@extends('app')

@section('content')
<div class="container">
    {!! Form::model($producto, ['route' => ['productos.update', $producto->id], 'method'=>'PUT', 'class' => 'form-horizontal']) !!}
        @include('productos.partials.fields')
        <button type="submit" class="btn btn-default">Guardar</button>
    {!! Form::close() !!}
</div>
@endsection
