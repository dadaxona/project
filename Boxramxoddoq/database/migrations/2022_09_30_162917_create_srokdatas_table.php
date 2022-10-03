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
        Schema::create('srokdatas', function (Blueprint $table) {
            $table->id();
            $table->string('yil')->nullable();
            $table->string('oy')->nullable();
            $table->string('kun')->nullable();
            $table->string('srok')->nullable();
            $table->string('status')->nullable();
            $table->string('holat')->nullable();
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
        Schema::dropIfExists('srokdatas');
    }
};
