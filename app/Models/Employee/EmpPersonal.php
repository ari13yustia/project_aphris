<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpPersonal extends Model
{
    use HasFactory;
    protected $table = 'employee.emp_personals';
}
