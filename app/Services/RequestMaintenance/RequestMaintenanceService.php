<?php

namespace App\Services\RequestMaintenance;

use App\Models\Table\RequestMaintenanceTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class RequestMaintenanceService extends AppService implements AppServiceInterface
{

    public function __construct(RequestMaintenanceTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return RequestMaintenanceTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return RequestMaintenanceTable::findOrFail($id);
    }

    public function create($data)
    {
        return RequestMaintenanceTable::create([
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = RequestMaintenanceTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = RequestMaintenanceTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
