<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumberTranslationsTable extends Migration
{
    public function up()
    {
        Schema::create('number_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('number_id')->constrained()->onDelete('cascade');
            $table->string('language_code');
            $table->string('word')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('number_translations');
    }
}

