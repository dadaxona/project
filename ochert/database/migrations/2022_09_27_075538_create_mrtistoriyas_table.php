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
        Schema::create('mrtistoriyas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fam')->nullable();
            $table->string('data')->nullable();
            $table->string('tel')->nullable();
            $table->string('adress')->nullable();
            $table->string('summa')->nullable();
            $table->string('tex')->nullable();
            $table->string('jami')->nullable();
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
        Schema::dropIfExists('mrtistoriyas');
    }
};
