<?php

namespace Database\Seeders;

use App\Models\Table\TypeTrailerTable;
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
        TypeTrailerTable::create([
            'id' => '00000001-0000-0000-0000-000000000001',
            'trailer_type' => 'Dry Van Trailers'
        ]);
        TypeTrailerTable::create([
            'id' => '00000001-0000-0000-0000-000000000002',
            'trailer_type' => 'Standard Flatbed Trailers'
        ]);
    }
}
