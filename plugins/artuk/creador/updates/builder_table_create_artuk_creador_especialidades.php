<?php namespace Artuk\Creador\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArtukCreadorEspecialidades extends Migration
{
    public function up()
    {
        Schema::create('artuk_creador_especialidades', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('id_restaurante');
            $table->integer('id_imagen');
            $table->string('nombre');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('artuk_creador_especialidades');
    }
}
