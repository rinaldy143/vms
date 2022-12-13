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
            'code_trailer' => $data['code_trailer'],
            'vehicle_connected' => $data['vehicle_connected'],
            // 'photo',
            'monthly_maintenance' => $data['monthly_maintenance'],
            // 'last_maintenance',
            'model_trailer_id' => $data['model_trailer_id'],
            'type_trailer_id' => $data['type_trailer_id'],
        ]);
    }

    public function update($id, $data)
    {
        $row = TrailerTable::findOrFail($id);
        $row->update([
            'code_trailer' => $data['code_trailer'],
            'vehicle_connected' => $data['vehicle_connected'],
            // 'photo',
            'monthly_maintenance' => $data['monthly_maintenance'],
            // 'last_maintenance',
            'model_trailer_id' => $data['model_trailer_id'],
            'type_trailer_id' => $data['type_trailer_id'],
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
