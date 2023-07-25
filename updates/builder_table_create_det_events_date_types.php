<?php namespace Det\Events\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDetEventsDateTypes extends Migration
{
    public function up()
    {
        Schema::create('det_events_date_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('det_events_date_types');
    }
}
