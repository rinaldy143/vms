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
        $workOrder = WorkOrderTable::with('users')->findOrFail($id);
        return $workOrder;
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

        // Update foto jika ada perubahan
        if ($data->hasFile('photo')) {
            if ($data->file('photo')->isValid()) {
                $imgName = $data->photo->getClientOriginalName();
                $data->photo->move(public_path('/img/workorder'), $imgName);
                $row->photo = $imgName;
            }
        } elseif (!$data->hasFile('photo') && !$row->photo) {
            unset($row->photo);
        }

        // Update data lainnya dari form pertama
        $row->fill([
            'jobsite_location' => $data['jobsite_location'],
            'damage_component' => $data['damage_component'],
            'damaged_level' => $data['damaged_level'],
            'analysist' => $data['analysist']
        ]);

        $row->save();

        return $row;

    }


    public function delete($id)
    {
        $row = WorkOrderTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
