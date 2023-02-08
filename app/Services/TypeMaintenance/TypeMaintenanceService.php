<?php

namespace App\Services\TypeMaintenance;

use App\Models\Table\MaintenanceTypeTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class TypeMaintenanceService extends AppService implements AppServiceInterface
{

    public function __construct(MaintenanceTypeTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return MaintenanceTypeTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return MaintenanceTypeTable::findOrFail($id);
    }

    public function create($data)
    {
        return MaintenanceTypeTable::create([
            'maintenance_type' => $data['maintenance_type'],
        ]);
    }

    public function update($id, $data)
    {
        $row = MaintenanceTypeTable::findOrFail($id);
        $row->update([
            'maintenance_type' => $data['maintenance_type'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = MaintenanceTypeTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
