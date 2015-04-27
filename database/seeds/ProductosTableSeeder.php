<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductosTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i <30; $i++)
        {
            \DB::table('productos')->insert(array(
                'nombre' => $faker->colorName,
                'descripcion_corta' => $faker->sentence($nbWords = 6),
                'descripcion' => $faker->sentence($nbWords = 12),
                'id_marca' => '1',
                'modelo' => $faker->SafeColorName,
                'precio_costo' => $faker->numberBetween($min = 1000, $max = 9000),
                'precio_venta' => $faker->numberBetween($min = 10000, $max = 60000),
                'stock' => $faker->randomDigitNotNull,
                'codigo' => $faker->ean13,
                'estado' => true,
                'id_categoria' => null,
                'fecha_ingreso' => $faker->dateTime
            ));
        }
    }
}