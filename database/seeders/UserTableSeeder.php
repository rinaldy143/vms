<?php

namespace Database\Seeders;

use App\Models\Entity\User;
use App\Models\Table\RoleTable;
use App\Models\Table\UserTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $model = (new UserTable());

        $datas =
            [
                [
                    'email' => 'admin@transtrack.id',
                    'phone_country_code' => '+62',
                    'phone_number' => '085774479471',
                ],
            ];

        UserTable::firstOrCreate([
            "id" => "00000001-0000-0000-0000-000000000001",
           'email' => 'admin@transtrack.id',
           'phone_country_code' => '+62',
           'phone_number' => '085774479471',
        ], [
            'name' => 'Admin',
            'password' => Hash::make('password'),
            'role' => 'ADMIN',
        ]);
        UserTable::firstOrCreate([
            "id" => "00000001-0000-0000-0000-000000000002",
           'email' => 'member@transtrack.id',
           'phone_country_code' => '+62',
           'phone_number' => '085774479472',
        ], [
            'name' => 'Member',
            'password' => Hash::make('password'),
            'role' => 'MEMBER',
        ]);
    }
}
