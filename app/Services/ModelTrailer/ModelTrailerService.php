<?php

namespace App\Services\ModelTrailer;

use App\Models\Table\TrailerModelTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class ModelTrailerService extends AppService implements AppServiceInterface
{

    public function __construct(TrailerModelTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return TrailerModelTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return TrailerModelTable::findOrFail($id);
    }

    public function create($data)
    {
        return TrailerModelTable::create([
            'trailer_model' => $data['trailer_model'],
        ]);
    }

    public function update($id, $data)
    {
        $row = TrailerModelTable::findOrFail($id);
        $row->update([
            'trailer_model' => $data['trailer_model'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = TrailerModelTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
