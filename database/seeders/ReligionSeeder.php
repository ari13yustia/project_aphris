<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master\MsReligion;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'religion_code' => 'REL00001',
                'religion_name' => 'Islam',
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'religion_code' => 'REL00002',
                'religion_name' => 'Katolik',
                'status' => 't',
                'created_at' => now(),
            ],
            ];

            MsReligion::insert($data);
    }
}
