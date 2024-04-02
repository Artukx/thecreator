<?php namespace Artuk\Creador\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtukCreadorImagen3 extends Migration
{
    public function up()
    {
        Schema::table('artuk_creador_imagen', function($table)
        {
            $table->dropColumn('ruta');
        });
    }
    
    public function down()
    {
        Schema::table('artuk_creador_imagen', function($table)
        {
            $table->binary('ruta')->nullable();
        });
    }
}
