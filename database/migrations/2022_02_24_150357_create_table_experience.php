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
        Schema::create('Experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->string('body')->nullable();
            $table->date('debut');
            $table->date('fin');
            $table->integer('cv_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('cv_id')->references('id')->on('cvs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Experiences');
    }
};
