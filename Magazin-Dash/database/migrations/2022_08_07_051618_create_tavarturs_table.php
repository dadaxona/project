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
        Schema::create('tavarturs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('glavnitip_id')->unsigned();
            $table->string('name')->nullable();
            $table->timestamps();
            $table->foreign('glavnitip_id')->references('id')->on('glavnitips')
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
        Schema::dropIfExists('tavarturs');
    }
};
