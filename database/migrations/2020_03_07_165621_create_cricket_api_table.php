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
              
            $table->json('date');    
           
            $table->json('dateTimeGMT');
         
            $table->string('team-1');
            $table->string('team-2');            
            $table->boolean('squad');
            $table->string('toss_winner_team');
            $table->boolean('matchStarted');
            $table->string('type');
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
