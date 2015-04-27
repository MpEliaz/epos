@extends('app')

@section('content')
<h2 class="text-center">Productos</h2><br>
<div class="container">
    <div class="row">
        <a class="btn btn-default" href="{{url('productos/create')}}">Nuevo</a>
        <span>Hay <strong>{{$productos->total()}}</strong> productos</span>

              {!!Form::open(['route' => 'productos.index', 'method'=>'GET', 'class'=>'navbar-form navbar-right', 'role'=>'search'])!!}
                <div class="form-group">
                  {!! Form::text('q', null, ['class'=> 'form-control', 'placeholder'=> 'Buscar'])!!}
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
              {!!Form::close()!!}
    </div>
	<table id="productos-tabla" class=" table table-hover">
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
	    			<td> @if($producto->estado === 1)<button onclick="desactivar_producto({{$producto->id}})" class="btn btn-danger">Desactivar</button>
                        @elseif ($producto->estado === 0)
                            <button onclick="activar_producto({{$producto->id}})" class="btn btn-success">Activar</button>
                        @endif</td>
                    <td><a href="{{route('productos.edit', $producto->id)}}" class="btn btn-primary">Modificar</a></td>
                </tr>
            @endforeach
    	</tbody>
    </table>
    {!! $productos->render() !!}
</div>
<div id="test"></div>
@endsection