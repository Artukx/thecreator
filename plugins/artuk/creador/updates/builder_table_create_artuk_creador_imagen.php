<?php namespace Artuk\Creador\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArtukCreadorImagen extends Migration
{
    public function up()
    {
        Schema::create('artuk_creador_imagen', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('id_restaurante');
            $table->string('ruta');
            $table->string('nombre');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('artuk_creador_imagen');
    }
}
