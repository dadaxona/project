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
        Schema::create('benzinrasxodistoriyas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('benzin_id')->unsigned();
            $table->string('holat')->nullable();
            $table->string('holat2')->nullable();
            $table->string('data')->nullable();
            $table->string('summa')->nullable();
            $table->string('litr')->nullable();
            $table->string('jami')->nullable();
            $table->timestamps();
            $table->foreign('benzin_id')->references('id')->on('benzins')
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
        Schema::dropIfExists('benzinrasxodistoriyas');
    }
};
