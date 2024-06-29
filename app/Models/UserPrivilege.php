<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPrivilege extends Model
{
    use HasFactory;
    protected $table = 'public.users_privileges';
    protected $fillable = [
        'id',
        'user_id',
        'app_menu_id',
        'permission',
        'status',
    ];
}
