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
            'maintenance_type' => $data['maintenance_type'],
        ]);
    }

    public function update($id, $data)
    {
        $row = TypeMaintenanceTable::findOrFail($id);
        $row->update([
            'maintenance_type' => $data['maintenance_type'],
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
