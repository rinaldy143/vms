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
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = ModelTrailerTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
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
