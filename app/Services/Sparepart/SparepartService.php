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
        $photo = null;
        if ($data['photo']) {
            $photo = $data['photo']->getClientOriginalName() . '-' . time() . '.' . $data['photo']->extension();
            $data['photo']->move(public_path('img/spareparts'), $photo);
        }

        return SparepartTable::create([
            'id_sparepart' => $data['id_sparepart'],
            'brand' => $data['brand'],
            'name' => $data['name'],
            'count' => $data['count'],
            'photo' => $photo,
        ]);
    }

    public function update($id, $data)
    {
        $row = SparepartTable::findOrFail($id);
        $row->update([
            'id_sparepart' => $data['id_sparepart'],
            'brand' => $data['brand'],
            'name' => $data['name'],
            'count' => $data['count'],
            'photo' => $data['photo'],
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
