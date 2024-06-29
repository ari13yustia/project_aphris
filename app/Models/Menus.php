<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use HasFactory;
    protected $table = 'public.app_menus';
    protected $fillable = [
        'title',
        'url',
        'icon',
        'description',
        'app_menu_id',
        'order',
        'group_menu_id',
        'is_active'
    ];
}
