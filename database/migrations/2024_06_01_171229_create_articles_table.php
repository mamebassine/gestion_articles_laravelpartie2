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
        $table->string('nom');
        $table->text('description')->nullable();
        $table->dateTime('date_creation');
        $table->enum('type', ['en premier', 'en second'])->nullable();
        $table->string('image')->default('https://place-hold.it/300x500');
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
