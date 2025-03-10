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
        Schema::create('test_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_answer_id')->constrained('test_answers')->onDelete('cascade');
            $table->foreignId('reviewed_by')->constrained('users')->onDelete('cascade');
            $table->float('score')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_reviews');
    }
};
