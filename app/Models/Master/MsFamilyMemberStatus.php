<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsFamilyMemberStatus extends Model
{
    use HasFactory;
    protected $table = 'master.ms_family_member_status';
    protected $fillable = [
        'family_member_status_code',
        'name',
        'status',
    ];
}
