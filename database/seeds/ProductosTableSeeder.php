<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder {

    public function run()
    {
        
        \DB::table('productos')->insert(array(
            'nombre' => 'Zapatillas colloky azules',
            'descripcion_corta' => 'tela de la mejor calidaa!',
            'descripcion' => 'tela de la mejor calidaa!',
            'id_marca' => '1',
            'modelo' => 'skeiter',
            'precio' => '1000',
            'stock' => '2',
            'codigo' => '123456789',
            'fecha_ingreso' => '',
        ));
    }
}