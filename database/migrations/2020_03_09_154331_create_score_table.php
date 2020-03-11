<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score', function (Blueprint $table) {
           
            $table->boolean('matchStarted');
            $table->text('team1');
            $table->text('team2');
            $table->text('v');
            $table->integer('ttl');
            $table->text('source');
            $table->text('url');
            $table->text('pubDate');
            $table->integer('creditsLeft');          

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
        Schema::dropIfExists('score');
    }
}
