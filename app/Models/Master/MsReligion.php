<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsReligion extends Model
{
    use HasFactory;
    protected $table = 'master.ms_religions';
    protected $fillable = [
        'religion_code',
        'religion_name',
        'status',
    ];
}
