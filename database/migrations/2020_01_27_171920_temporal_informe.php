<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TemporalInforme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('informe_temporal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hallazgo');
            $table->string('tipo');
            $table->string('recomendacion');
            $table->string('riesgo');
            $table->string('responsable');
            $table->string('causa_raiz');
            $table->string('accion');
            $table->string('compromiso');
            $table->string('fecha');
            $table->string('calificacion');
            $table->string('calif_numerico');
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
        Schema::dropIfExists('informe_temporal');
    }

    
}
