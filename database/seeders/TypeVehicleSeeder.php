<?php

namespace Database\Seeders;

use App\Models\Table\TypeVehicleTable;
use Illuminate\Database\Seeder;

class TypeVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000001',
                'vehicle_type' => 'Van'
            ]
        );
        TypeVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000002',
                'vehicle_type' => 'Colt Diesel Engkel'
            ]
        );
        TypeVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000003',
                'vehicle_type' => 'Pickup'
            ]
        );
        TypeVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000004',
                'vehicle_type' => 'Tronton'
            ]
        );
        TypeVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000005',
                'vehicle_type' => 'Wingbox'
            ]
        );
        TypeVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000006',
                'vehicle_type' => 'Fuso'
            ]
        );
        TypeVehicleTable::create(
            [
                'id' => '00000001-0000-0000-0000-000000000007',
                'vehicle_type' => 'Colt Diesel Double'
            ]
        );
    }
}
