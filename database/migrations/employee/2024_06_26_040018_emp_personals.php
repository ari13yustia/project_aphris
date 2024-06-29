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
        Schema::connection('pgsql_employee')->create('emp_personals', function (Blueprint $table) {
            $table->id();
            $table->string('personal_code',10);
            $table->string('nik',20);
            $table->string('full_name',50);
            $table->string('email');
            $table->string('no_telp',15);
            $table->enum('gender', [1, 2]);
            $table->date('date_of_birth');
            $table->string('place_of_birth',50);
            $table->integer('ms_religion_id');
            $table->string('instagram');
            $table->string('website');
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
