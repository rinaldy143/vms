<?php

namespace App\Services\Priority;

use App\Models\Table\PriorityTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class PriorityService extends AppService implements AppServiceInterface
{

    public function __construct(PriorityTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return PriorityTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return PriorityTable::findOrFail($id);
    }

    public function create($data)
    {
        return PriorityTable::create([
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = PriorityTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = PriorityTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
