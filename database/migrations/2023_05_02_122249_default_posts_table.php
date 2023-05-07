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
        Schema::table('posts', function (Blueprint $table) {
            if (!Schema::hasColumn('posts', 'quote_author')) {
                $table->string('quote_author')->default('');
            }
            if (!Schema::hasColumn('posts', 'image')) {
                $table->string('image')->nullable()->default(null);
            }
            if (!Schema::hasColumn('posts', 'video')) {
                $table->string('video')->nullable()->default(null);
            }
            if (!Schema::hasColumn('posts', 'link')) {
                $table->string('link')->nullable()->default(null);
            }
            if (!Schema::hasColumn('posts', 'views')) {
                $table->unsignedBigInteger('views')->default(0);
            }
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
