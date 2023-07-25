<?php namespace Det\Events\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateDetEventsEvents extends Migration
{
    public function up()
    {
        Schema::table('det_events_events', function($table)
        {
            $table->integer('user_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('det_events_events', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
