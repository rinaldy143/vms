<?php

namespace App\Services\TypeRole;

use App\Models\Table\RoleTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class TypeRoleService extends AppService implements AppServiceInterface
{

    public function __construct(RoleTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return RoleTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return RoleTable::findOrFail($id);
    }

    public function create($data)
    {
        return RoleTable::create([
            'role' => $data['role'],
        ]);
    }

    public function update($id, $data)
    {
        $row = RoleTable::findOrFail($id);
        $row->update([
            'role' => $data['role'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = RoleTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
