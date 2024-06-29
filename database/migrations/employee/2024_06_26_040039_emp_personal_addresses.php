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
        Schema::connection('pgsql_employee')->create('emp_personal_addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('emp_personal_id');
            $table->text('address');
            $table->integer('province_id');
            $table->integer('city_id');
            $table->text('current_address');
            $table->integer('current_province_id');
            $table->integer('current_city_id');
            $table->boolean('status');
            $table->timestamps();
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
