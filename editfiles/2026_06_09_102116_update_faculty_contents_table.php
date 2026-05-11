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
         Schema::table('faculty_contents', function (Blueprint $table) {

            $table->foreignId('faculty_id')
                ->after('id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('section_id')
                ->after('faculty_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->longText('content')
                ->after('section_id')
                ->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('faculty_contents', function (Blueprint $table) {
            $table->dropForeign(['faculty_id']);
            $table->dropForeign(['section_id']);
            $table->dropColumn(['faculty_id', 'section_id', 'content']);
        });
    }
};
