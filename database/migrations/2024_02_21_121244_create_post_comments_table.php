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
        Schema::create('post_comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); // This creates the created_at and updated_at columns
            $table->unsignedBigInteger('post_id'); // Assuming post_id refers to an ID in a posts table
            $table->string('username');
            $table->tinyInteger('rating'); // Assuming rating is a number like 1 to 5
            $table->text('comment'); // Use text for comments as they can be long

            // Assuming you have a posts table and post_id should reference the id on the posts table
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_comments');
    }
};
