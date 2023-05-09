<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date_election');
            $table->unsignedInteger('idElection');
            $table->unsignedInteger('idBulletin');
            $table->unsignedInteger('idParticipant');
            $table->foreign('idElection')->references('id')->on('election')->onDelete('cascade');
            $table->foreign('idBulletin')->references('id')->on('bulletin')->onDelete('cascade');
            $table->foreign('idParticipant')->references('id')->on('participant')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vote');
    }
};
