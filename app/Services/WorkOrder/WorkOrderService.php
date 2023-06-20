<?php

namespace App\Services\WorkOrder;

use App\Models\Table\WorkOrderTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;
use Illuminate\Support\Facades\Auth;


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
        $user = Auth::user(); // Mendapatkan user yang sedang login

        $workOrder = WorkOrderTable::create([
            'rm_id' => $data['rm_id'],
            'assign_by' => $user->name,
        ]);

        $workOrder->user()->attach($data['user_id']);

    }

    public function update($id, $data)
    {
        $row = WorkOrderTable::findOrFail($id);
        $row->update([

            'damage_component' => $data['damage_component'],
            'damaged_level' => $data['damaged_level'],
            'analysist' => $data['analysist'],        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = WorkOrderTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
