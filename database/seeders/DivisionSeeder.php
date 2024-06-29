<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master\MsDivision;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'division_code' => 'DIV00001',
                'name' => 'H1',
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'division_code' => 'DIV00002',
                'name' => 'H2',
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'division_code' => 'DIV00003',
                'name' => 'H3',
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'division_code' => 'DIV00004',
                'name' => 'HC3',
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 5,
                'division_code' => 'DIV00005',
                'name' => 'IT',
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 6,
                'division_code' => 'DIV00006',
                'name' => 'HR',
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 7,
                'division_code' => 'DIV00007',
                'name' => 'FAT',
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 8,
                'division_code' => 'DIV00008',
                'name' => 'NETWORK',
                'status' => 't',
                'created_at' => now(),
            ]
            ];

            MsDivision::insert($data);
    }
}
