<?php

namespace Database\Seeders;

use App\Models\Table\TrailerModelTable;
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
        TrailerModelTable::create([
            'id' => '00000001-0000-0000-0000-000000000001',
            'trailer_model' => 'ACF1023',
        ]);
        TrailerModelTable::create([
            'id' => '00000001-0000-0000-0000-000000000002',
            'trailer_model' => 'NDG1023',
        ]);
    }
}
