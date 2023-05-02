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
        Schema::create('useradress', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("User_id");
            $table->foreign("User_id")->references('id')->on("users");
            $table->string("Region");
            $table->string("AdressText");
            $table->string("Province");
            $table->string("District");
            $table->string("ZipCode");
            $table->boolean("isDefault")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('useradress');
    }
};
