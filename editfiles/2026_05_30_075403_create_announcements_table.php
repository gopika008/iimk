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
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();

            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();

            $table->text('short_description')->nullable();

            $table->string('image')->nullable();

            $table->string('link_url')->nullable();
            $table->string('link_name')->nullable();

            $table->date('publish_date')->nullable();
            $table->date('expiry_date')->nullable();

            $table->boolean('show_on_homepage')->default(false);
            $table->integer('display_order')->default(0);

            $table->boolean('status')->default(true);

            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
