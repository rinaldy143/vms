<?php

namespace Database\Seeders;

use App\Models\Table\RoleTable;
use Illuminate\Database\Seeder;

class TypeRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleTable::firstOrCreate(
            [
                'id' => '00000001-0000-0000-0000-000000000001',
                'role' => 'ADMIN',
            ]
        );
        RoleTable::firstOrCreate(
            [
                'id' => '00000001-0000-0000-0000-000000000002',
                'role' => 'MEMBER',
            ]
        );
    }
}
