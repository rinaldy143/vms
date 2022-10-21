<?php

namespace App\Services\RequestSparepart;

use App\Models\Table\RequestSparepartTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class RequestSparepartService extends AppService implements AppServiceInterface
{

    public function __construct(RequestSparepartTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return RequestSparepartTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return RequestSparepartTable::findOrFail($id);
    }

    public function create($data)
    {
        return RequestSparepartTable::create([
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = RequestSparepartTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = RequestSparepartTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
