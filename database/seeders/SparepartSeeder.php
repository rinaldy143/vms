<?php

namespace Database\Seeders;

use App\Models\Table\SparepartTable;
use Illuminate\Database\Seeder;

class SparepartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SparepartTable::create([
            'id' => '00000001-0000-0000-0000-000000000001',
            'identity' => 'OL123',
            'name' => 'Oli',
            'brand' => 'TOP_1',
            'count' => '70',
            'photo' => 'spareparts/Mask group.png'
        ]);

        SparepartTable::create([
            'id' => '00000001-0000-0000-0000-000000000002',
            'identity' => 'OL124',
            'name' => 'Oli',
            'brand' => 'TOP_2',
            'count' => '75',
            'photo' => 'spareparts/Mask group.png'
        ]);
    }
}
