<?php namespace Artuk\Creador\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtukCreadorImagen2 extends Migration
{
    public function up()
    {
        Schema::table('artuk_creador_imagen', function($table)
        {
            $table->binary('ruta')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('artuk_creador_imagen', function($table)
        {
            $table->binary('ruta')->nullable(false)->change();
        });
    }
}
