<?php namespace Artuk\Creador\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtukCreadorCarta2 extends Migration
{
    public function up()
    {
        Schema::table('artuk_creador_carta', function($table)
        {
            $table->dropColumn('id_restaurante');
            $table->dropColumn('id_cat_carta');
        });
    }
    
    public function down()
    {
        Schema::table('artuk_creador_carta', function($table)
        {
            $table->integer('id_restaurante');
            $table->integer('id_cat_carta');
        });
    }
}
