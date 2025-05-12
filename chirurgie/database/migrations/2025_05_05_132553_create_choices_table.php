<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('choices', function (Blueprint $table) {
        $table->id();
        $table->foreignId('chapter_id')->constrained()->onDelete('cascade');
        $table->string('text'); // le texte affiché pour le choix
        $table->foreignId('next_chapter_id')->nullable()->constrained('chapters')->nullOnDelete();
        $table->timestamps();
        $table->integer('self_confidence_impact')->default(0);
        $table->integer('medical_risk_impact')->default(0);
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choices');
    }
};
