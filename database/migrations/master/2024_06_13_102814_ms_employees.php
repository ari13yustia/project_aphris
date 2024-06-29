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
        Schema::connection('pgsql_master')->create('ms_employees', function (Blueprint $table) {
            $table->id();
            $table->string("employee_code",10);
            $table->text("description");
            $table->integer('user_id')->nullable();
            $table->integer('ms_division_id');
            $table->integer('ms_departemen_id');
            $table->integer('ms_sub_dept_id');
            $table->integer('ms_section_id');
            $table->integer('ms_job_title_id');
            $table->integer('ms_job_grade_id');
            $table->integer('emp_personal_id')->nullable();
            $table->integer('status_employee');
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
