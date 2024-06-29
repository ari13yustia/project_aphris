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
        Schema::create('app_menus', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->string('url')->nullable();
            $table->string('icon',50)->nullable();
            $table->string('description')->nullable();
            $table->integer('app_menu_id')->nullable();
            $table->integer('order');
            $table->integer('group_menu_id')->nullable();
            $table->integer('is_active')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_menus');
    }
};
