<?php

namespace Database\Seeders;

use App\Models\Table\MaintenanceTypeTable;
use Illuminate\Database\Seeder;

class TypeMaintenanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MaintenanceTypeTable::create([
            'id' => '00000001-0000-0000-0000-000000000001',
            'maintenance_type' => 'Services'
        ]);
        MaintenanceTypeTable::create([
            'id' => '00000001-0000-0000-0000-000000000002',
            'maintenance_type' => 'Repair'
        ]);
    }
}
