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
            $table->string('hallazgo')->nullable();
            $table->string('tipo')->nullable();
            $table->string('recomendacion')->nullable();
            $table->string('riesgo')->nullable();
            $table->string('responsable')->nullable();
            $table->string('causa_raiz')->nullable();
            $table->string('accion')->nullable();
            $table->string('compromiso')->nullable();
            $table->string('fecha')->nullable();
            $table->string('calificacion')->nullable();
            $table->string('calif_numerico')->nullable();
            $table->string('anio')->nullable();
            $table->string('trimestre')->nullable();
            $table->string('archivo')->nullable();
            $table->string('localidad')->nullable();
            $table->string('empresa')->nullable();
            $table->string('auditor')->nullable();
            $table->string('gerente')->nullable();
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
