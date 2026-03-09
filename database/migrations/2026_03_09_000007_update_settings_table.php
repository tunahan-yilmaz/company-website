<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->json('available_locales')->default('["tr"]')->after('meta_description');
            $table->string('default_locale', 10)->default('tr')->after('available_locales');
        });
    }

    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn(['available_locales', 'default_locale']);
        });
    }
};
