<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('badge_text')->nullable();
            $table->string('icon')->nullable(); // fa class e.g. "fa-code"
            $table->text('short_description')->nullable();
            $table->longText('detail_text')->nullable();
            $table->string('image')->nullable();
            $table->json('features')->nullable(); // array of feature strings
            $table->json('tech_stack')->nullable(); // array of tech names
            $table->string('cta_text')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
