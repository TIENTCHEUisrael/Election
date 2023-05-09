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
        Schema::create('participant', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cni');
            $table->string('nom',100);
            $table->string('prenom',100);
            $table->string('telephone',100)->nullable;
            $table->integer('age');
            $table->char('sexe')->default('m');
            $table->string('status')->default('electeur');
            $table->string('login',30);
            $table->string('pwd',100);
            $table->string('email')->nullable;
            $table->string('etat',1)->default('0');
            $table->unsignedInteger('idregion');
            $table->foreign('idregion')->references('id')->on('region')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participant');
    }
};
