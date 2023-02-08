<?php

namespace Database\Seeders;

use App\Models\Table\ModelTrailerTable;
use Illuminate\Database\Seeder;

class ModelTrailerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelTrailerTable::create([
            'id' => '00000001-0000-0000-0000-000000000001',
            'trailer_model' => 'ACF1023',
        ]);
        ModelTrailerTable::create([
            'id' => '00000001-0000-0000-0000-000000000002',
            'trailer_model' => 'NDG1023',
        ]);
    }
}
