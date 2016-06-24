<?php namespace Jwaver\Jcalendar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePagebsTable extends Migration
{

    public function up()
    {
        Schema::create('jwaver_jcalendar_pagebs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jwaver_jcalendar_pagebs');
    }

}
