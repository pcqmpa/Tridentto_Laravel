<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_detalles', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('factura_encabezado_id')->unsigned();
            $table->foreign('factura_encabezado_id')->references('id')->on('factura_encabezados');
            $table->string('codigo_producto');
            $table->integer('cantidad');
            $table->double('cur_valorunitario',18,2);
            $table->integer('iva');
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
        Schema::dropIfExists('factura_detalles');
    }
}
