<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productimages', function (Blueprint $table) {
            $table->unsignedBigInteger("ProductId");
            $table->unsignedBigInteger("PhotoId");

            $table->foreign("ProductId")->references('id')->on("products");
            $table->foreign("PhotoId")->references('id')->on("images");


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productimages');
    }
};
