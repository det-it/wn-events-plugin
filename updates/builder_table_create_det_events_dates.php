<?php namespace Det\Events\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDetEventsDates extends Migration
{
    public function up()
    {
        Schema::create('det_events_dates', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('event_id')->nullable();
            $table->date('date')->nullable();
            $table->time('opening')->nullable();
            $table->time('closing')->nullable();
            $table->text('description')->nullable();
            $table->integer('date_type')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('det_events_dates');
    }
}
