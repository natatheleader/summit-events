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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('tagline')->nullable();
            $table->text('description');
            $table->text('overview')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('venue');
            $table->string('location');
            $table->string('website_url')->nullable();
            $table->string('primary_color')->default('#1a365d');
            $table->string('secondary_color')->default('#00d4ff');
            $table->string('logo')->nullable();
            $table->string('hero_image')->nullable();
            $table->integer('expected_attendees')->nullable();
            $table->integer('speakers_count')->nullable();
            $table->integer('organizations_count')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->json('stats')->nullable(); // For custom stats
            $table->text('why_attend')->nullable();
            $table->text('why_sponsor')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
