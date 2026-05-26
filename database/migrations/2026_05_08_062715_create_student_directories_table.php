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
        Schema::create('student_directories', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('roll_no')->unique();

            $table->string('photo')->nullable();

            $table->string('last_qualification')->nullable();

            $table->string('email')->unique();

            $table->string('programme');

            // For PhD
            $table->enum('status', ['pursuing', 'graduated'])->nullable();

            // For PT / EPGP / BL
            $table->string('current_organization')->nullable();
            $table->string('designation')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_directories');
    }
};
