<?php

namespace App\Services\ModelTrailer;

use App\Models\Table\ModelTrailerTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class ModelTrailerService extends AppService implements AppServiceInterface
{

    public function __construct(ModelTrailerTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return ModelTrailerTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return ModelTrailerTable::findOrFail($id);
    }

    public function create($data)
    {
        return ModelTrailerTable::create([
            'trailer_model' => $data['trailer_model'],
        ]);
    }

    public function update($id, $data)
    {
        $row = ModelTrailerTable::findOrFail($id);
        $row->update([
            'trailer_model' => $data['trailer_model'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = ModelTrailerTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
