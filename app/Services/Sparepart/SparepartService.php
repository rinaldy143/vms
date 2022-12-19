<?php

namespace App\Services\Sparepart;

use App\Models\Table\SparepartTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class SparepartService extends AppService implements AppServiceInterface
{

    public function __construct(SparepartTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return SparepartTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return SparepartTable::findOrFail($id);
    }

    public function create($data)
    {
        return SparepartTable::create([
            'id_sparepart' => $data['id_sparepart'],
            'photo' => $data['photo'],
            'brand' => $data['brand'],
            'name' => $data['name'],
            'count' => $data['count']
        ]);
    }

    public function update($id, $data)
    {
        $row = SparepartTable::findOrFail($id);
        $row->update([
            'id_sparepart' => $data['id_sparepart'],
            'photo' => $data['photo'],
            'brand' => $data['brand'],
            'name' => $data['name'],
            'count' => $data['count']
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = SparepartTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
