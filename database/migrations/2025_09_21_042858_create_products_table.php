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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->unique();
            $table->string('name');
            $table->text('description');
            //TODO:: сделать через пакет spatie/laravel-medialibrary
            //$table->string('image');
            $table->decimal('price', 10, 2);
            $table->unsignedTinyInteger('discount_percent')->nullable();
            $table->integer('quantity');
            $table->boolean('status')->default(false);
            //TODO:: сделать отдельную таблицу для slugs
            //$table->string('slug')->unique();
            //TODO:: сделать отдельную таблицу для атрибутов.
            //TODO:: сделть отдельную таблицу для меток (хит, новинки и т.д.)
            //TODO:: сделать отдельную таблицу для статусов наличия
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
