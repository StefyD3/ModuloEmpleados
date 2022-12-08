<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePensionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pensiones', function (Blueprint $table) {
            $table->id();
            $table->integer('nit')->unique;
            $table->string('razon_social', 100);
            $table->string('dirección');
            $table->integer('telefono');
            $table->date('fecha_afiliacion');

            $table->foreignId('afiliacion_id')->constrained('afiliaciones');
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
        Schema::dropIfExists('pensiones');
    }
}
