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
        Schema::create('summas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naqtsumma')->nullable();
            $table->string('uzqardsumma')->nullable();
            $table->string('humosumma')->nullable();
            $table->string('data')->nullable();
            $table->string('naqtsumma3')->nullable();
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
        Schema::dropIfExists('summas');
    }
};
