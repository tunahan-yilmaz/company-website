<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Existing: id, title, slug, author, category, excerpt, content, image, meta_title, meta_description, is_published, published_at, timestamps
// Adding: subtitle, read_time, tags, is_active, order

return new class extends Migration {
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('subtitle')->nullable()->after('title');
            $table->integer('read_time')->nullable()->after('excerpt');
            $table->json('tags')->nullable()->after('read_time');
            $table->boolean('is_active')->default(true)->after('is_published');
            $table->integer('order')->default(0)->after('is_active');
        });
    }

    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn(['subtitle', 'read_time', 'tags', 'is_active', 'order']);
        });
    }
};
