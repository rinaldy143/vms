<?php

namespace App\Services\Trailer;

use App\Models\Table\TrailerTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class TrailerService extends AppService implements AppServiceInterface
{

    public function __construct(TrailerTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return TrailerTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return TrailerTable::findOrFail($id);
    }

    public function create($data)
    {
        return TrailerTable::create([
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = TrailerTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = TrailerTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
