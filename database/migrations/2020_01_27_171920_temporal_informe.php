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
