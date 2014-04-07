<?php namespace RainLab\Forum\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateChannelsTable extends Migration
{

    public function up()
    {
        Schema::create('rainlab_forum_channels', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('rainlab_forum_channels');
    }

}
