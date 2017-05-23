<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterFacturaEncabezadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('factura_encabezados', function (Blueprint $table) {

            $table->double('cur_flete',18,2);
            $table->double('cur_descuento',18,2);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('factura_encabezados', function (Blueprint $table) {
            $table->dropColumn('cur_flete');
            $table->dropColumn('cur_descuento');
        });
    }
}
