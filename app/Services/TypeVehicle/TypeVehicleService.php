<?php

namespace App\Services\TypeVehicle;

use App\Models\Table\TypeVehicleTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class TypeVehicleService extends AppService implements AppServiceInterface
{

    public function __construct(TypeVehicleTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return TypeVehicleTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return TypeVehicleTable::findOrFail($id);
    }

    public function create($data)
    {
        return TypeVehicleTable::create([
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = TypeVehicleTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = TypeVehicleTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
