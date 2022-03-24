<?php namespace Albrightlabs\AppReadMe\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateReadMesTable Migration
 */
class CreateReadmesTable extends Migration
{
    public function up()
    {
        Schema::create('albrightlabs_appreadme_readmes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title')->nullable();
            $table->longText('sections')->nullable();
            $table->text('tags')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('albrightlabs_appreadme_readmes');
    }
}
