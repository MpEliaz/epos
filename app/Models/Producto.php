<?php

use Illuminate\Database\Eloquent\Model;

class Producto extends Model {

    protected $table = 'Productos';
    protected $fillable = ['nombre',
                            'descripcion_corta',
                            'descripcion',
                            'id_marca',
                            'modelo',
                            'precio_costo',
                            'precio_venta',
                            'stock',
                            'codigo',
                            'estado',
                            'fecha_ingreso'];

    public function get_marca()
    {
        return $this->hasOne('Marca');
    }
}