<?php

namespace App\Services\ModelVehicle;

use App\Models\Table\VehicleModelTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class ModelVehicleService extends AppService implements AppServiceInterface
{

    public function __construct(VehicleModelTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return VehicleModelTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return VehicleModelTable::findOrFail($id);
    }

    public function create($data)
    {
        return VehicleModelTable::create([
            'vehicle_model' => $data['vehicle_model'],
        ]);
    }

    public function update($id, $data)
    {
        $row = VehicleModelTable::findOrFail($id);
        $row->update([
            'vehicle_model' => $data['vehicle_model'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = VehicleModelTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
