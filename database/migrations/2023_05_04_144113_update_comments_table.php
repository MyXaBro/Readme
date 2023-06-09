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
        Schema::table('comments', function (Blueprint $table) {
            $table->timestamp('updated_at')->nullable();
        });
    }

        public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropColumn('updated_at');
        });
    }
};
