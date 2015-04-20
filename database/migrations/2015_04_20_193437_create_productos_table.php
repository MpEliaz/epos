<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Producto', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('marca');
            $table->string('modelo');
            $table->string('precio');
            $table->integer('stock');
            $table->string('codigo');
            $table->dateTime('fecha_ingreso');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Producto');
	}

}
