<?php

use Illuminate\Database\Seeder;

class MarcaTableSeeder extends Seeder {

    public function run()
    {
        \DB::table('marca')->insert(array(
            'nombre' => 'Nike'
        ));
    }
}