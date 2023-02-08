<?php

namespace App\Services\Breakdown;

use App\Models\Table\BreakdownTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class BreakdownService extends AppService implements AppServiceInterface
{

    public function __construct(BreakdownTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return BreakdownTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return BreakdownTable::findOrFail($id);
    }

    public function create($data)
    {
        return BreakdownTable::create([
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = BreakdownTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = BreakdownTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
