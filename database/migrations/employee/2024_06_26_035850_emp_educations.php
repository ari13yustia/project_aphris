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
        Schema::connection('pgsql_employee')->create('emp_educations', function (Blueprint $table) {
            $table->id();
            $table->string('education_code',10);
            $table->integer('ms_employee_id');
            $table->string('education_name',50);
            $table->text('description');
            $table->date('entry_date');
            $table->date('out_date');
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
