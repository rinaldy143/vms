<?php

namespace App\Services\TypeMaintenance;

use App\Models\Table\TypeMaintenanceTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class TypeMaintenanceService extends AppService implements AppServiceInterface
{

    public function __construct(TypeMaintenanceTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return TypeMaintenanceTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return TypeMaintenanceTable::findOrFail($id);
    }

    public function create($data)
    {
        return TypeMaintenanceTable::create([
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = TypeMaintenanceTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = TypeMaintenanceTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
