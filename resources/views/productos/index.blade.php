@extends('app')

@section('content')
<h2 class="text-center">Productos</h2><br>
<div class="container">
    <div class="row">
        <a class="btn btn-default" href="{{url('productos/create')}}">Nuevo</a>
        <span>Hay <strong>{{$productos->total()}}</strong> productos</span><br/><br/>
    </div>
	<table class="table table-hover">
    	<thead>
    		<tr>
    			<td>Id</td>
    			<td>Nombre</td>
    			<td>Descripcion</td>
    			<td>Marca</td>
    			<td>Modelo</td>
    			<td>Precio costo</td>
    			<td>Precio Venta</td>
    			<td>Stock</td>
    			<td>Estado</td>
    			<td>Modificar</td>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($productos as $producto)
                <tr>
	                <td>{{$producto->id}}</td>
	    			<td>{{$producto->nombre}}</td>
	    			<td>{{$producto->descripcion_corta}}</td>
	    			<td>{{$producto->marca}}</td>
	    			<td>{{$producto->modelo}}</td>
	    			<td>{{$producto->precio_costo}}</td>
	    			<td>{{$producto->precio_venta}}</td>
	    			<td>{{$producto->stock}}</td>
	    			<td> @if($producto->estado === 1)<button class="btn btn-danger">Desactivar</button>
                        @elseif ($producto->estado === 0)
                            <button class="btn btn-success">Activar</button>
                        @endif</td>
                    <td><button class="btn btn-primary">Modificar</button></td>
                </tr>
            @endforeach
    	</tbody>
    </table>
    {!! $productos->render() !!}
</div>
@endsection