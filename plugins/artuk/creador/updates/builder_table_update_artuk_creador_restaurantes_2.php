<?php namespace Artuk\Creador\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtukCreadorRestaurantes2 extends Migration
{
    public function up()
    {
        Schema::table('artuk_creador_restaurantes', function($table)
        {
            $table->dropColumn('id_logo');
        });
    }
    
    public function down()
    {
        Schema::table('artuk_creador_restaurantes', function($table)
        {
            $table->integer('id_logo');
        });
    }
}
