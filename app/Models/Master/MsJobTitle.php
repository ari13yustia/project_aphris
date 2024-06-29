<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsJobTitle extends Model
{
    use HasFactory;
    protected $table = 'master.ms_job_titles';
    protected $fillable = [
        'job_title_code',
        'name',
        'ms_section_id',
        'status',
    ];
}
