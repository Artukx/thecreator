<?php namespace Artuk\Creador\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArtukCreadorCarta extends Migration
{
    public function up()
    {
        Schema::create('artuk_creador_carta', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('nombre');
            $table->double('precio', 10, 0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('artuk_creador_carta');
    }
}
