<?php

namespace App\Services\TypeJob;

use App\Models\Table\TypeJobTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class TypeJobService extends AppService implements AppServiceInterface
{

    public function __construct(TypeJobTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return TypeJobTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return TypeJobTable::findOrFail($id);
    }

    public function create($data)
    {
        return TypeJobTable::create([
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = TypeJobTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = TypeJobTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
