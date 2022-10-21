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

    public function create($data)
    {
        return VehicleTable::create([
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = VehicleTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
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
