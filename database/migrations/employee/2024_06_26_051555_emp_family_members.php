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
        Schema::connection('pgsql_employee')->create('emp_family_members', function (Blueprint $table) {
            $table->id();
            $table->integer('ms_employee_id');
            $table->string('family_member_code');
            $table->string('family_member_name',50);
            $table->string('no_telp',20);
            $table->text('address');
            $table->integer('ms_religion_id');
            $table->integer('ms_family_member_status_id');
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
