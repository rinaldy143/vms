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
            'id_sparepart' => 'AO-01',
            'name' => 'Gear',
            'brand' => 'Astra',
            'count' => '10',
            'photo' => '/path'
        ]);

        SparepartTable::create([
            'id' => '00000001-0000-0000-0000-000000000002',
            'id_sparepart' => 'AO-02',
            'name' => 'Roller',
            'brand' => 'SNSV',
            'count' => '101',
            'photo' => '/path'
        ]);
    }
}
