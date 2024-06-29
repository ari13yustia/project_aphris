<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master\MsFamilyMemberStatus;

class FamilyMemberStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        [
            'id' => 1,
            'family_member_status_code' => 'FMS00001',
            'name' => 'Ibu',
            'status' => 't',
            'created_at' => now(),
        ],
        [
            'id' => 2,
            'family_member_status_code' => 'FMS00002',
            'name' => 'Ayah',
            'status' => 't',
            'created_at' => now(),
        ],
        [
            'id' => 3,
            'family_member_status_code' => 'FMS00003',
            'name' => 'Adik Perempuan',
            'status' => 't',
            'created_at' => now(),
        ],
        [
            'id' => 4,
            'family_member_status_code' => 'FMS00004',
            'name' => 'Adik Laki-laki',
            'status' => 't',
            'created_at' => now(),
        ],
        [
            'id' => 5,
            'family_member_status_code' => 'FMS00005',
            'name' => 'Pasangan',
            'status' => 't',
            'created_at' => now(),
        ],
        ];

        MsFamilyMemberStatus::insert($data);
    }
}
