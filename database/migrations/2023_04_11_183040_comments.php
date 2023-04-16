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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("ProductId");
            $table->unsignedBigInteger("UserId");
            $table->string("CommentText");
            $table->boolean("IsOk");
            $table->foreign("ProductId")->references('id')->on("products");
            $table->foreign("UserId")->references('id')->on("users");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
