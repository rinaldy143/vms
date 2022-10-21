<?php

namespace App\Services\TypeRole;

use App\Models\Table\TypeRoleTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class TypeRoleService extends AppService implements AppServiceInterface
{

    public function __construct(TypeRoleTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return TypeRoleTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return TypeRoleTable::findOrFail($id);
    }

    public function create($data)
    {
        return TypeRoleTable::create([
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = TypeRoleTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = TypeRoleTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
