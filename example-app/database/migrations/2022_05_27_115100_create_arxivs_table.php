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
        Schema::create('arxivs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('itogs')->nullable();
            $table->string('naqt')->nullable();
            $table->string('plastik')->nullable();
            $table->string('bank')->nullable();
            $table->string('karzs')->nullable();
            $table->string('karzs2')->nullable();
            $table->date('srok')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arxivs');
    }
};
