<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('announcements', function (Blueprint $table) {
            $table->json('title_json')->nullable();
            $table->json('short_description_json')->nullable();
            $table->json('link_name_json')->nullable();
        });

        // ✅ Convert old data → JSON
        DB::table('announcements')->get()->each(function ($item) {
            DB::table('announcements')
                ->where('id', $item->id)
                ->update([
                    'title_json' => json_encode(['en' => $item->title]),
                    'short_description_json' => json_encode(['en' => $item->short_description]),
                    'link_name_json' => json_encode(['en' => $item->link_name]),
                ]);
        });

        // ❗ Now drop old columns and rename
        Schema::table('announcements', function (Blueprint $table) {
            $table->dropColumn(['title', 'short_description', 'link_name']);
        });

        Schema::table('announcements', function (Blueprint $table) {
            $table->renameColumn('title_json', 'title');
            $table->renameColumn('short_description_json', 'short_description');
            $table->renameColumn('link_name_json', 'link_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('announcements', function (Blueprint $table) {
            //
        });
    }
};
