<?php

namespace Database\Seeders;

use App\Models\Table\TrailerTypeTable;
use Illuminate\Database\Seeder;

class TypeTrailerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TrailerTypeTable::create([
            'id' => '00000001-0000-0000-0000-000000000001',
            'trailer_type' => 'Dry Van Trailers'
        ]);
        TrailerTypeTable::create([
            'id' => '00000001-0000-0000-0000-000000000002',
            'trailer_type' => 'Standard Flatbed Trailers'
        ]);
    }
}
