<?php

namespace App\Services\WorkOrder;

use App\Models\Table\WorkOrderTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class WorkOrderService extends AppService implements AppServiceInterface
{

    public function __construct(WorkOrderTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return WorkOrderTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return WorkOrderTable::findOrFail($id);
    }

    public function create($data)
    {
        return WorkOrderTable::create([
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = WorkOrderTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = WorkOrderTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
