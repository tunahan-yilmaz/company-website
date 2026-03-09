<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Existing: id, name, website_url, logo_image, description, order, is_active, timestamps
// All fields already exist! No changes needed - this migration is a no-op kept for consistency
return new class extends Migration {
    public function up(): void
    {
        // references table already has all required fields:
        // name, website_url, logo_image, description, order, is_active
    }

    public function down(): void
    {
        //
    }
};
