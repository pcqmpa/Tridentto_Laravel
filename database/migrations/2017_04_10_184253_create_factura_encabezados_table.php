<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaEncabezadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_encabezados', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('num_factura')->unique();
            $table->date('dtm_fecha_creacion');
            $table->date('dtm_fecha_vencimiento');
            $table->integer('tercero_id')->unsigned();
            $table->foreign('tercero_id')->references('id')->on('terceros');
            $table->double('cur_bruto',18,2);
            $table->double('cur_iva',18,2);
            $table->boolean('log_estado')->default(true);
            $table->text('observacion');
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
        Schema::dropIfExists('factura_encabezados');
    }
}
