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
        Schema::create('cart', function (Blueprint $table) {
            $table->unsignedBigInteger("ProductId");
            $table->unsignedBigInteger("UserId");
            $table->tinyInteger("Count");
            $table->double("LineTotal");
            $table->foreign("ProductId")->references('id')->on("products");
            $table->foreign("UserId")->references('id')->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
