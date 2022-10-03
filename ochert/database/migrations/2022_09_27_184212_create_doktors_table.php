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
        Schema::create('doktors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('fam')->nullable();
            $table->string('tel')->nullable();
            $table->string('adress')->nullable();
            $table->string('yonalish')->nullable();
            $table->string('soni')->nullable();
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
        Schema::dropIfExists('doktors');
    }
};
