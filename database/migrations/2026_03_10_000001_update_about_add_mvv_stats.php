<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('about', function (Blueprint $table) {
            // Misyon / Vizyon / Değerler
            $table->text('mission')->nullable()->after('about_text');
            $table->text('vision')->nullable()->after('mission');
            $table->text('values')->nullable()->after('vision');

            // 4 Sayaç
            $table->string('stat_1_number')->nullable()->after('values');   // örn: 150+
            $table->string('stat_1_label')->nullable()->after('stat_1_number');  // Tamamlanan Proje
            $table->string('stat_2_number')->nullable()->after('stat_1_label');
            $table->string('stat_2_label')->nullable()->after('stat_2_number');
            $table->string('stat_3_number')->nullable()->after('stat_2_label');
            $table->string('stat_3_label')->nullable()->after('stat_3_number');
            $table->string('stat_4_number')->nullable()->after('stat_3_label');
            $table->string('stat_4_label')->nullable()->after('stat_4_number');
        });
    }

    public function down(): void
    {
        Schema::table('about', function (Blueprint $table) {
            $table->dropColumn([
                'mission', 'vision', 'values',
                'stat_1_number', 'stat_1_label',
                'stat_2_number', 'stat_2_label',
                'stat_3_number', 'stat_3_label',
                'stat_4_number', 'stat_4_label',
            ]);
        });
    }
};
