<?php

namespace App\Services\TypeTrailer;

use App\Models\Table\TypeTrailerTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class TypeTrailerService extends AppService implements AppServiceInterface
{

    public function __construct(TypeTrailerTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return TypeTrailerTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return TypeTrailerTable::findOrFail($id);
    }

    public function create($data)
    {
        return TypeTrailerTable::create([
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = TypeTrailerTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = TypeTrailerTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
