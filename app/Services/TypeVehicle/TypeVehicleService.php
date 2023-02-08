<?php

namespace App\Services\TypeVehicle;

use App\Models\Table\VehicleTypeTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class TypeVehicleService extends AppService implements AppServiceInterface
{

    public function __construct(VehicleTypeTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return VehicleTypeTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return VehicleTypeTable::findOrFail($id);
    }

    public function create($data)
    {
        return VehicleTypeTable::create([
            'vehicle_type' => $data['vehicle_type'],
        ]);
    }

    public function update($id, $data)
    {
        $row = VehicleTypeTable::findOrFail($id);
        $row->update([
            'vehicle_type' => $data['vehicle_type'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = VehicleTypeTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
