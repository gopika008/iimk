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

            // Basic
            $table->string('title');

            $table->enum('type', [
                'conference',
                'seminar',
                'workshop',
            ]);

            // Dates
            $table->date('start_date');
            $table->date('end_date')->nullable();

            // Location
            $table->string('venue')->nullable();

            // Media
            $table->string('banner')->nullable();
            $table->string('brochure')->nullable();

            // Content
            $table->longText('description')->nullable();

            // External Links
            $table->string('registration_url')->nullable();

            // Status
            $table->boolean('is_active')->default(true);

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
