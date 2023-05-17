<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('content_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon_class');
            $table->timestamps();
        });

        // Заполнение таблицы content_types со значениями по умолчанию
        DB::table('content_types')->insert([
            ['name' => 'Фото', 'icon_class' => 'image'],
            ['name' => 'Видео', 'icon_class' => 'video'],
            ['name' => 'Текст', 'icon_class' => 'text'],
            ['name' => 'Цитата', 'icon_class' => 'quotes'],
            ['name' => 'Ссылка', 'icon_class' => 'link'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_types');
    }
};

