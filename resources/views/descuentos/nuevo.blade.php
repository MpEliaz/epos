@extends('app')

@section('content')
<div class="container">
        {!! Form::open(['route' => 'productos.store', 'method'=>'POST', 'class' => 'form-horizontal']) !!}
            @include('productos.partials.fields')
             <button type="submit" class="btn btn-default">Guardar</button>
        {!! Form::close() !!}
</div>
@endsection