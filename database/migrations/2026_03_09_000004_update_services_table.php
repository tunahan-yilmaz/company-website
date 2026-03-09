<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Existing: id, title, slug, badge_text, icon, short_description, detail_text, image, features(json), tech_stack(json), cta_text, order, is_active, timestamps
// Adding: section_id (anchor), description (alias for short_description matching controller)

return new class extends Migration {
    public function up(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->string('section_id')->nullable()->after('slug'); // e.g. #software
        });
    }

    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['section_id']);
        });
    }
};
