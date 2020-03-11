<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCricketApiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id('unique_id');            
            $table->longText('date')->nullable();
            $table->longText('dateTimeGMT')->nullable();         
                  
            $table->string('team-1');
            $table->string('team-2');            
            $table->boolean('squad');
            $table->string('toss_winner_team',100);
            $table->boolean('matchStarted');
            $table->string('type',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cricket_api');
    }
}
