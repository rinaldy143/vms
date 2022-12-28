<?php

namespace App\Services\Sparepart;

use App\Models\Table\SparepartTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;
use Illuminate\Support\Facades\Storage;

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
        $photo = $data['photo']?->store('spareparts');

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
        if (!blank($row->photo)) {
            Storage::delete($row->photo);
        }
        $data['photo'] = $data['photo']?->store('spareparts');

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
