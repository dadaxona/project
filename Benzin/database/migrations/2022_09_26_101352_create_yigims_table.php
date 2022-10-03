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
        Schema::create('yigims', function (Blueprint $table) {
            $table->id();
            $table->string('olish')->nullable();
            $table->string('sotish')->nullable();
            $table->string('qarz')->nullable();
            $table->string('rasxod')->nullable();
            $table->string('pribl')->nullable();
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
        Schema::dropIfExists('yigims');
    }
};
