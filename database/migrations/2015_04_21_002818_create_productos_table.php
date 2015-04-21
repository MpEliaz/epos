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
        Schema::create('productos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion_corta');
            $table->string('descripcion');
            $table->integer('id_marca')->unsigned();
            $table->string('modelo');
            $table->string('precio');
            $table->integer('stock');
            $table->string('codigo');
            $table->dateTime('fecha_ingreso');
            $table->timestamps();

            $table->foreign('id_marca')->references('id')->on('marca');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('productos');
    }
}