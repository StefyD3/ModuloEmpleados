<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCcompensacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ccompensaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('nit')->unique;
            $table->string('razon_social', 100);
            $table->string('dirección');
            $table->integer('telefono');
            $table->date('fecha_afiliacion');
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
        Schema::dropIfExists('ccompensaciones');
    }
}
