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
        Schema::create('buyurtma2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('buyurtma_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('file')->nullable();
            $table->integer('son')->nullable();
            $table->integer('summa')->nullable();
            $table->text('kament')->nullable();
            $table->timestamps();
            $table->foreign('buyurtma_id')->references('id')->on('buyurtmas')
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
        Schema::dropIfExists('buyurtma2s');
    }
};
