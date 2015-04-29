<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateVentaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ventas', function(Blueprint $table){

            $table->increments('id');
            $table->integer('nro_venta');
            $table->date('fecha_venta');
            $table->time('hora_venta');
            $table->string('tipo_pago');
            $table->integer('estado_venta');
            $table->integer('total_venta');
            $table->integer('id_vendedor')->unsigned()->nullable();
            $table->integer('id_cliente')->unsigned()->nullable();


        });


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ventas');

	}

}
