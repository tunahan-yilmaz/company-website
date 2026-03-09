<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Existing: id, title, subtitle, btn_text, btn_url, image, is_active, order, timestamps
// Adding: uptitle (above title line), btn_text_2, btn_url_2

return new class extends Migration {
    public function up(): void
    {
        Schema::table('sliders', function (Blueprint $table) {
            $table->string('uptitle')->nullable()->after('id'); // small text above title
            $table->string('btn_text_2')->nullable()->after('btn_url');
            $table->string('btn_url_2')->nullable()->after('btn_text_2');
        });
    }

    public function down(): void
    {
        Schema::table('sliders', function (Blueprint $table) {
            $table->dropColumn(['uptitle', 'btn_text_2', 'btn_url_2']);
        });
    }
};
