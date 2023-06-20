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
        ModelVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000007',
                'vehicle_model' => 'Mitsubishi Colt L300.'
            ]
        );
        ModelVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000008',
                'vehicle_model' => 'Mercedes-Benz Sprinter'
            ]
        );
        ModelVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000009',
                'vehicle_model' => 'Ford Transit'
            ]
        );
        ModelVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000010',
                'vehicle_model' => 'Ford Ranger'
            ]
        );
        ModelVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000011',
                'vehicle_model' => 'Toyota Hilux'
            ]
        );
        ModelVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000012',
                'vehicle_model' => 'Hino FM'
            ]
        );
        ModelVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000013',
                'vehicle_model' => 'Isuzu Giga'
            ]
        );
        ModelVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000014',
                'vehicle_model' => 'Isuzu Wingbox'
            ]
        );
        ModelVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000015',
                'vehicle_model' => 'Mitsubishi Fuso Wingbox'
            ]
        );
        ModelVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000016',
                'vehicle_model' => 'Mitsubishi Fuso Super Great'
            ]
        );
        ModelVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000017',
                'vehicle_model' => 'Mitsubishi Fuso Fighter'
            ]
        );
    }
}
