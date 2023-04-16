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
        Schema::create('productdetail', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger("Count");
            $table->double("UnitPrice");
            $table->unsignedBigInteger("ProductId");
            $table->foreign("ProductId")->references('id')->on("products");
            $table->unsignedBigInteger("CategoryId");
            $table->foreign("CategoryId")->references('id')->on("category");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productdetail');
    }
};
