<?php

namespace Database\Seeders;

use App\Models\Table\ModelVehicleTable;
use Illuminate\Database\Seeder;

class ModelVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000001',
                'vehicle_model' => 'Colt Diesel Double (CDD) Bak'
            ]
        );
        ModelVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000002',
                'vehicle_model' => 'Colt Diesel Double (CDD) Los Bak'
            ]
        );
        ModelVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000003',
                'vehicle_model' => 'Colt Diesel Double (CDD) Long Box'
            ]
        );
        ModelVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000004',
                'vehicle_model' => 'Colt Diesel Double (CDD) Bak Long'
            ]
        );
        ModelVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000005',
                'vehicle_model' => 'Colt Diesel Double (CDD) Bak Air Galon'
            ]
        );
        ModelVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000006',
                'vehicle_model' => 'Colt Diesel Double (CDD) Box Reefer'
            ]
        );
    }
}
