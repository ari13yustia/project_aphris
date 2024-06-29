<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsSubDept extends Model
{
    use HasFactory;
    protected $table = 'master.ms_sub_depts';
    protected $fillable = [
        'sub_dept_code',
        'name',
        'ms_departement_id',
        'status',
    ];
}
