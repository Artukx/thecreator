<?php namespace Artuk\Creador\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtukCreadorEspecialidades2 extends Migration
{
    public function up()
    {
        Schema::table('artuk_creador_especialidades', function($table)
        {
            $table->dropColumn('restaurante_id');
        });
    }
    
    public function down()
    {
        Schema::table('artuk_creador_especialidades', function($table)
        {
            $table->integer('restaurante_id');
        });
    }
}
