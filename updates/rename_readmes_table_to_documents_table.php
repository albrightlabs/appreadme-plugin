<?php namespace Albrightlabs\AppReadMe\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateDocumentsTable Migration
 */
class RenameReadmesTableToDocumentsTable extends Migration
{
    public function up()
    {
        Schema::rename('albrightlabs_appreadme_readmes', 'albrightlabs_appreadme_documents');
    }

    public function down()
    {
        Schema::rename('albrightlabs_appreadme_documents', 'albrightlabs_appreadme_readmes');
    }
}
