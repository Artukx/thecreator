<?php namespace Artuk\Creador\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtukCreadorRestaurantes extends Migration
{
    public function up()
    {
        Schema::table('artuk_creador_restaurantes', function($table)
        {
            $table->string('url', 255);
            $table->string('email', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('artuk_creador_restaurantes', function($table)
        {
            $table->dropColumn('url');
            $table->string('email', 255)->nullable(false)->change();
        });
    }
}
