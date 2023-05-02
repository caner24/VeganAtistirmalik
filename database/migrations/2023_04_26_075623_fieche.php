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
        Schema::create('fieche', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("ProductDetId");
            $table->foreign("ProductDetId")->references('id')->on("productdetail");
            $table->unsignedBigInteger("UserId");
            $table->foreign("UserId")->references('id')->on("users");
            $table->unsignedBigInteger("AdressId");
            $table->foreign("AdressId")->references('id')->on("useradress");
            $table->double("LineTotal");
            $table->boolean("isReady")->default(0);
            $table->boolean("isShipping")->default(0);
            $table->boolean("isOk")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fieche');
    }
};
