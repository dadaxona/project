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
        Schema::create('updatetavrs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tavar_id')->unsigned();
            $table->bigInteger('ichkitavar_id')->unsigned();
            $table->bigInteger('tavar2_id')->unsigned();
            $table->string('raqam')->nullable();
            $table->string('hajm')->nullable();
            $table->string('summa')->nullable();
            $table->string('summa2')->nullable();
            $table->timestamps();
            $table->foreign('tavar_id')->references('id')->on('tavars')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ichkitavar_id')->references('id')->on('ichkitavars')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tavar2_id')->references('id')->on('tavar2s')
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
        Schema::dropIfExists('updatetavrs');
    }
};
