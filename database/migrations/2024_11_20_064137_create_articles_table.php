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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->text('content')->nullable();
            $table->string('image')->nullable(); // Path ke gambar artikel
            $table->string('author')->nullable(); // Nama penulis
            $table->enum('is_published',['YES','NO'])->default('NO'); // Status publikasi
            $table->timestamp('published_at')->nullable(); // Waktu publikasi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
