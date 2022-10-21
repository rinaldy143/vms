<?php

namespace App\Services\ModelVehicle;

use App\Models\Table\ModelVehicleTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class ModelVehicleService extends AppService implements AppServiceInterface
{

    public function __construct(ModelVehicleTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return ModelVehicleTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return ModelVehicleTable::findOrFail($id);
    }

    public function create($data)
    {
        return ModelVehicleTable::create([
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = ModelVehicleTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = ModelVehicleTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
