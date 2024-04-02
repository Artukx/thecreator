<?php namespace Artuk\Creador\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtukCreadorImagen extends Migration
{
    public function up()
    {
        Schema::table('artuk_creador_imagen', function($table)
        {
            $table->binary('ruta')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('artuk_creador_imagen', function($table)
        {
            $table->string('ruta', 255)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
