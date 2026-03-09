<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Existing: id, portfolio_category_id, title, slug, description, detail_text, image, project_url, client_name, duration, tags(json), is_featured, is_active, order, timestamps
// Adding: subtitle, date, team_size, budget, location, challenge, tech_stack, features, results, gallery_images

return new class extends Migration {
    public function up(): void
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->string('subtitle')->nullable()->after('title');
            $table->string('date')->nullable()->after('client_name');
            $table->string('team_size')->nullable()->after('date');
            $table->string('budget')->nullable()->after('team_size');
            $table->string('location')->nullable()->after('budget');
            $table->longText('challenge')->nullable()->after('detail_text');
            $table->json('tech_stack')->nullable()->after('challenge');
            $table->json('features')->nullable()->after('tech_stack');
            $table->json('results')->nullable()->after('features');
            $table->json('gallery_images')->nullable()->after('results');
        });
    }

    public function down(): void
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropColumn([
                'subtitle',
                'date',
                'team_size',
                'budget',
                'location',
                'challenge',
                'tech_stack',
                'features',
                'results',
                'gallery_images'
            ]);
        });
    }
};
