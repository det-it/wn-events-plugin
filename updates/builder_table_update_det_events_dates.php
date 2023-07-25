<?php namespace Det\Events\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateDetEventsDates extends Migration
{
    public function up()
    {
        Schema::table('det_events_dates', function($table)
        {
            $table->renameColumn('date_type', 'date_type_id');
        });
    }
    
    public function down()
    {
        Schema::table('det_events_dates', function($table)
        {
            $table->renameColumn('date_type_id', 'date_type');
        });
    }
}
