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
            'role' => $data['role'],
        ]);
    }

    public function update($id, $data)
    {
        $row = TypeRoleTable::findOrFail($id);
        $row->update([
            'role' => $data['role'],
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
