<?php

namespace Database\Seeders;

use App\Models\Table\JobTypeTable;
use Illuminate\Database\Seeder;

class TypeJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobTypeTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000001',
                'job_type' => 'Maintenance'
            ]
        );
        JobTypeTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000002',
                'job_type' => 'Repair'
            ]
        );
    }
}
