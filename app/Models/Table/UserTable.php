<?php

namespace App\Models\Table;

use App\Models\Entity\User;

class UserTable extends User
{
    public function typeRole(){
        return $this->belongsTo(TypeRoleTable::class, 'type_role_id');
    }
}
