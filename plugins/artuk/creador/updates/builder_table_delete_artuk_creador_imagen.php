<?php namespace Artuk\Creador\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteArtukCreadorImagen extends Migration
{
    public function up()
    {
        Schema::dropIfExists('artuk_creador_imagen');
    }
    
    public function down()
    {
        Schema::create('artuk_creador_imagen', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('id_restaurante');
            $table->string('nombre', 255);
        });
    }
}
