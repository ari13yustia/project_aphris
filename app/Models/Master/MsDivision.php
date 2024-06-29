<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsDivision extends Model
{
    use HasFactory;
    protected $table = 'master.ms_divisions';
    protected $fillable = [
        'division_code',
        'name',
        'status',
    ];
}
