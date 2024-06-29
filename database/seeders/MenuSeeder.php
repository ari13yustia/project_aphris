<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menus;
use App\Models\UserPrivilege;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                'id' => 1,
                'title' => 'Dashboard',
                'url'  => '/home',
                'icon'  => 'nav-icon fas fa-tachometer-alt',
                'description'  => 'Menu For Main Dashboard',
                'app_menu_id'  => null,
                'order'  => '1',
                'group_menu_id'  => null,
                'is_active'  => '1'
            ],
            [
                'id' => 2,
                'title' => 'Employees',
                'url'  => '/employees',
                'icon'  => 'nav-icon fa fa-users',
                'description'  => 'Menu For Utilities App',
                'app_menu_id'  => null,
                'order'  => '2',
                'group_menu_id'  => null,
                'is_active'  => '1'
            ],
            [
                'id' => 3,
                'title' => 'MPP',
                'url'  => null,
                'icon'  => 'nav-icon fa fa-book',
                'description'  => 'Menu For Utilities App',
                'app_menu_id'  => null,
                'order'  => '3',
                'group_menu_id'  => null,
                'is_active'  => '1'
            ],
            [
                'id' => 4,
                'title' => 'MPP Karyawan',
                'url'  => null,
                'icon'  => null,
                'description'  => 'Menu For Utilities App',
                'app_menu_id'  => 3,
                'order'  => '1',
                'group_menu_id'  => null,
                'is_active'  => '1'
            ],
            [
                'id' => 5,
                'title' => 'MPP Jabatan',
                'url'  => null,
                'icon'  => null,
                'description'  => null,
                'app_menu_id'  => 3,
                'order'  => '2',
                'group_menu_id'  => null,
                'is_active'  => '1'
            ],
        ];

        Menus::insert($menus);

        $user_privileges = [
            [
                'id' => 1,
                'user_id' => 1,
                'app_menu_id'  => 1,
                'permission'  => null,
                'status'  => 1,
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'app_menu_id'  => 2,
                'permission'  => null,
                'status'  => 1,
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'app_menu_id'  => 3,
                'permission'  => null,
                'status'  => 1,
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'app_menu_id'  => 4,
                'permission'  => null,
                'status'  => 1,
            ],
            [
                'id' => 5,
                'user_id' => 1,
                'app_menu_id'  => 5,
                'permission'  => null,
                'status'  => 1,
            ],
        ];

        UserPrivilege::insert($user_privileges);
    }
}
