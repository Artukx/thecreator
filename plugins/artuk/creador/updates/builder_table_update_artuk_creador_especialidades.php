<?php namespace Artuk\Creador\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtukCreadorEspecialidades extends Migration
{
    public function up()
    {
        Schema::table('artuk_creador_especialidades', function($table)
        {
            $table->renameColumn('id_restaurante', 'restaurante_id');
        });
    }
    
    public function down()
    {
        Schema::table('artuk_creador_especialidades', function($table)
        {
            $table->renameColumn('restaurante_id', 'id_restaurante');
        });
    }
}
