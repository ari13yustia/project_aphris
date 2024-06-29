<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsEmployee extends Model
{
    use HasFactory;
    protected $table = 'master.ms_employees';
    protected $fillable = [
        'division_code',
        'name',
        'status',
    ];
}
