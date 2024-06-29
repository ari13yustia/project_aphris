<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsSection extends Model
{
    use HasFactory;
    protected $table = 'master.ms_sections';
    protected $fillable = [
        'sections_code',
        'name',
        'ms_sub_dept_id',
        'status',
    ];
}
