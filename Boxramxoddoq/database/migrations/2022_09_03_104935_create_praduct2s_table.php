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
        Schema::create('praduct2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('praduct_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('file')->nullable();
            $table->string('summa')->nullable();
            $table->timestamps();
            $table->foreign('praduct_id')->references('id')->on('praducts')
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
        Schema::dropIfExists('praduct2s');
    }
};
