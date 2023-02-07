<?php

namespace App\Services\VehicleTrailer;

use App\Models\Table\VehicleTrailerTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class VehicleTrailerService extends AppService implements AppServiceInterface
{

    public function __construct(VehicleTrailerTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return VehicleTrailerTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return VehicleTrailerTable::findOrFail($id);
    }

    public function create($data)
    {
        return VehicleTrailerTable::create([
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = VehicleTrailerTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = VehicleTrailerTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
