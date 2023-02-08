<?php

namespace App\Services\TypeTrailer;

use App\Models\Table\TrailerTypeTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class TypeTrailerService extends AppService implements AppServiceInterface
{

    public function __construct(TrailerTypeTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return TrailerTypeTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return TrailerTypeTable::findOrFail($id);
    }

    public function create($data)
    {
        return TrailerTypeTable::create([
            'trailer_type' => $data['trailer_type'],
        ]);
    }

    public function update($id, $data)
    {
        $row = TrailerTypeTable::findOrFail($id);
        $row->update([
            'trailer_type' => $data['trailer_type'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = TrailerTypeTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
