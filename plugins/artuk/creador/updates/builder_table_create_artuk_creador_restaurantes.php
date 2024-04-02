<?php namespace Artuk\Creador\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArtukCreadorRestaurantes extends Migration
{
    public function up()
    {
        Schema::create('artuk_creador_restaurantes', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('nombre', 255);
            $table->text('lema');
            $table->string('telefono', 12);
            $table->string('email', 255);
            $table->integer('id_logo');
            $table->string('direccion', 255);
            $table->text('horario');
            $table->integer('id_carta')->nullable();
            $table->text('descripcion');
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('artuk_creador_restaurantes');
    }
}
