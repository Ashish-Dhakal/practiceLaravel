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
        // Schema::create('books', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('teacher_id');
        //     $table->foreign('taeacher_id')->references('id')->on('teacher');
        //     $table->string('title');
        //     $table->string('author');
        //     $table->string('publisher');
        //     $table->string('isbn');
        //     $table->string('cover_image');
        //     $table->string('description');
        //     $table->string('category');
        //     $table->string('language');
        //     $table->string('price');
        //     $table->string('stock');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
