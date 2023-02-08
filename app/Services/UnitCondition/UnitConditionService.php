<?php

namespace App\Services\UnitCondition;

use App\Models\Table\UnitConditionTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class UnitConditionService extends AppService implements AppServiceInterface
{

    public function __construct(UnitConditionTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return UnitConditionTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return UnitConditionTable::findOrFail($id);
    }

    public function create($data)
    {
        return UnitConditionTable::create([
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = UnitConditionTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = UnitConditionTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
