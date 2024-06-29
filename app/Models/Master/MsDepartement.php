<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsDepartement extends Model
{
    use HasFactory;
    protected $table = 'master.ms_departements';
    protected $fillable = [
        'departement_code',
        'name',
        'ms_division_id',
        'status',
    ];
}
