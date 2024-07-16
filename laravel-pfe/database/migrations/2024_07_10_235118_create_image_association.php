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
        Schema::create('image_association', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chambre_id');
            $table->unsignedBigInteger('image_id');
            $table->foreign('chambre_id')->references('id')->on('chambre');
            $table->foreign('image_id')->references('id')->on('images');

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
        Schema::dropIfExists('image_association');
    }
};
