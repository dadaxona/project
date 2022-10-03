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
        Schema::create('praduct3s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('praduct2_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('file')->nullable();
            $table->integer('son')->nullable();
            $table->integer('sum')->nullable();
            $table->integer('summa')->nullable();
            $table->text('kament')->nullable();
            $table->timestamps();
            $table->foreign('praduct2_id')->references('id')->on('praduct2s')
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
        Schema::dropIfExists('praduct3s');
    }
};
