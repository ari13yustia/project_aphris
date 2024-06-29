<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsJobGrade extends Model
{
    use HasFactory;
    protected $table = 'master.ms_job_grades';
    protected $fillable = [
        'job_grade_code',
        'name',
        'status',
    ];
}
