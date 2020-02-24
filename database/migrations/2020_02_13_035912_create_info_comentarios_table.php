<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInfoComentariosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_comentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario');
            $table->integer('id_hallazgo');
            $table->string('comentarios')->nullable();
            $table->string('nom_doc')->nullable();            
            $table->text('archivo')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('info_comentarios');
    }
}
