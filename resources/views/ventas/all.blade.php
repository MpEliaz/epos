@extends('app')
@section('content')
<div class="container">
    <table class="table table-condensed tabla_ventas" style="border-collapse:collapse;">
        <thead>
        <tr>
            <th>Id</th>
            <th>Fecha venta</th>
            <th>Tipo pago</th>
            <th>Estado venta</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ventas as $v)
            <tr data-toggle="collapse" data-target="#row{{$v->id}}" class="accordion-toggle">
                <td>{{$v->id}}</td>
                <td>{{$v->fecha_venta}}</td>
                <td>{{$v->tipo_pago}}</td>
                <td>{{$v->estado_venta}}</td>
                <td>{{$v->total_venta}}</td>
            <tr >
                <td colspan="5" class="hiddenRow">
                    <div class="accordian-body collapse" id="row{{$v->id}}">
                        <table border="1" class="table venta_detalle_table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Modelo</th>
                                    <th>Descripción</th>
                                    <th>Cantidad</th>
                                    <th>Precio unitario</th>
                                </tr>
                            </thead>
                                @foreach($v->productos as $p)
                                <tr>
                                    <td width="25%">{{$p->nombre}}</td>
                                    <td width="20%">{{$p->modelo}}</td>
                                    <td width="40%">{{$p->descripcion_corta}}</td>
                                    <td width="5%">{{$p->pivot->cantidad}}</td>
                                    <td width="15%">{{$p->precio_venta}}</td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </td>
            </tr>
        @endforeach
{{--

        <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
            <td>1</td>
            <td>05 May 2013</td>
            <td>Credit Account</td>
            <td class="text-success">$150.00</td>
            <td class="text-error"></td>
            <td class="text-success">$150.00</td>
        </tr>
        <tr >
            <td colspan="6" class="hiddenRow"><div class="accordian-body collapse" id="demo1"> Demo1 </div> </td>
        </tr>
        <tr data-toggle="collapse" data-target="#demo2" class="accordion-toggle">
            <td>2</td>
            <td>05 May 2013</td>
            <td>Credit Account</td>
            <td class="text-success">$11.00</td>
            <td class="text-error"></td>
            <td class="text-success">$161.00</td>
        </tr>
        <tr>
            <td colspan="6" class="hiddenRow"><div id="demo2" class="accordian-body collapse">Demo2</div></td>
        </tr>
        <tr data-toggle="collapse" data-target="#demo3" class="accordion-toggle">
            <td>3</td>
            <td>05 May 2013</td>
            <td>Credit Account</td>
            <td class="text-success">$500.00</td>
            <td class="text-error"></td>
            <td class="text-success">$661.00</td>
        </tr>
        <tr>
            <td colspan="6"  class="hiddenRow"><div id="demo3" class="accordian-body collapse">Demo3</div></td>
        </tr>
        </tbody>
--}}
    </table>
</div>
@endsection
