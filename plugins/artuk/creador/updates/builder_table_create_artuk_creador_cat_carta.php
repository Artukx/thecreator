<?php namespace Artuk\Creador\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArtukCreadorCatCarta extends Migration
{
    public function up()
    {
        Schema::create('artuk_creador_cat_carta', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('nombre');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('artuk_creador_cat_carta');
    }
}
