<?php namespace Epos\Models;


use Illuminate\Database\Eloquent\Model;

class Venta extends Model{

    protected $table = 'ventas';
    protected $fillable = ['nro_venta','fecha_venta', 'hora_venta', 'tipo_pago', 'estado_venta', 'total_venta', 'id_vendedor', 'id_cliente'];
    public $timestamps = false;

    public function productos()
    {
        return  $this->belongsToMany('Epos\Models\Producto','venta_detalle')->withTimestamps();
    }
}