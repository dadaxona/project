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
        Schema::create('praducts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('glavnitip_id')->unsigned();
            $table->bigInteger('tavartur_id')->unsigned();
            $table->string('glavniname')->nullable();
            $table->string('tipname')->nullable();
            $table->string('name');
            $table->string('img');
            $table->string('hajm');
            $table->integer('pakupka')->nullable();
            $table->integer('prodaja')->nullable();
            $table->timestamps();
            $table->foreign('glavnitip_id')->references('id')->on('glavnitips')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tavartur_id')->references('id')->on('tavarturs')
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
        Schema::dropIfExists('praducts');
    }
};
