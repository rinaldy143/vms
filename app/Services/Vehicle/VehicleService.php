<?php

namespace App\Services\Vehicle;

use App\Models\Table\VehicleTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class VehicleService extends AppService implements AppServiceInterface
{

    public function __construct(VehicleTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return VehicleTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return VehicleTable::findOrFail($id);
    }

    // public function index()
    // {
    //     return view("pages.vehicle.vehicle1");
    // }


    public function create($data)
    {
        return VehicleTable::create([
            'plat_number' => $data['plat_number'],
            'monthly_maintenance' => $data['monthly_maintenance'],
            'model_vehicle_id' => $data['model_vehicle_id'],
            'type_vehicle_id' => $data['type_vehicle_id'],
        ]);
        // dd($data);
    }

    public function update($id, $data)
    {
        $row = VehicleTable::findOrFail($id);
        $row->update([
            'plat_number' => $data['plat_number'],
            'monthly_maintenance' => $data['monthly_maintenance'],
            'model_vehicle_id' => $data['model_vehicle_id'],
            'type_vehicle_id' => $data['type_vehicle_id'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = VehicleTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
