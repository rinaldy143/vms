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
            'id_sparepart' => 'ol-01',
            'photo' => '/path',
            'brand' => 'Astra',
            'name' => 'Gear',
            'count' => '10'
        ]);

        SparepartTable::create([
            'id' => '00000001-0000-0000-0000-000000000002',
            'id_sparepart' => 'ol-02',
            'photo' => '/path',
            'brand' => 'SNSV',
            'name' => 'Roller',
            'count' => '101'
        ]);
    }
}
