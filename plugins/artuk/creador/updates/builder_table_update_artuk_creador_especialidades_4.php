<?php namespace Artuk\Creador\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtukCreadorEspecialidades4 extends Migration
{
    public function up()
    {
        Schema::table('artuk_creador_especialidades', function($table)
        {
            $table->text('descripcion');
        });
    }
    
    public function down()
    {
        Schema::table('artuk_creador_especialidades', function($table)
        {
            $table->dropColumn('descripcion');
        });
    }
}
