<?php

namespace Database\Seeders;

use App\Models\Table\VehicleModelTable;
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
        VehicleModelTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000001',
                'vehicle_model' => 'Colt Diesel Double (CDD) Bak'
            ]
        );
        VehicleModelTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000002',
                'vehicle_model' => 'Colt Diesel Double (CDD) Los Bak'
            ]
        );
        VehicleModelTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000003',
                'vehicle_model' => 'Colt Diesel Double (CDD) Long Box'
            ]
        );
        VehicleModelTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000004',
                'vehicle_model' => 'Colt Diesel Double (CDD) Bak Long'
            ]
        );
        VehicleModelTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000005',
                'vehicle_model' => 'Colt Diesel Double (CDD) Bak Air Galon'
            ]
        );
        VehicleModelTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000006',
                'vehicle_model' => 'Colt Diesel Double (CDD) Box Reefer'
            ]
        );
    }
}
