<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master\MsDepartement;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'id' => 1,
                'departement_code' => 'DEP00001',
                'name' => 'H1',
                'ms_division_id' => 1,
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'departement_code' => 'DEP00002',
                'name' => 'H2',
                'ms_division_id' => 2,
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'departement_code' => 'DEP00003',
                'name' => 'H3',
                'ms_division_id' => 3,
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'departement_code' => 'DEP00004',
                'name' => 'HC3',
                'ms_division_id' => 4,
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 5,
                'departement_code' => 'DEP00005',
                'name' => 'IT',
                'ms_division_id' => 5,
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 6,
                'departement_code' => 'DEP00006',
                'name' => 'HR',
                'ms_division_id' => 6,
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 7,
                'division_code' => 'DEP00007',
                'name' => 'FAT',
                'ms_division_id' => 7,
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 8,
                'division_code' => 'DEP00008',
                'name' => 'AP1',
                'ms_division_id' => 8,
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 9,
                'division_code' => 'DEP00009',
                'name' => 'AP2',
                'ms_division_id' => 8,
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 10,
                'division_code' => 'DEP00010',
                'name' => 'AP3',
                'ms_division_id' => 8,
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 11,
                'division_code' => 'DEP00011',
                'name' => 'AP4',
                'ms_division_id' => 8,
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 12,
                'division_code' => 'DEP00012',
                'name' => 'AP5',
                'ms_division_id' => 8,
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 13,
                'division_code' => 'DEP00013',
                'name' => 'AP6',
                'ms_division_id' => 8,
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 14,
                'division_code' => 'DEP00014',
                'name' => 'AP7',
                'ms_division_id' => 8,
                'status' => 't',
                'created_at' => now(),
            ],
            [
                'id' => 15,
                'division_code' => 'DEP00015',
                'name' => 'AP8',
                'ms_division_id' => 8,
                'status' => 't',
                'created_at' => now(),
            ]
            ];

            MsDepartement::insert($data);
    }
}
