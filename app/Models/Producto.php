<?php

use Illuminate\Database\Eloquent\Model;

class Producto extends Model {

    protected $table = 'Productos';

    public function get_marca()
    {
        return $this->hasOne('Marca');
    }
}