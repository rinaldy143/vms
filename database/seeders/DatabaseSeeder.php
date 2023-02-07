<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Table\TrailerModelTable;
use App\Models\Table\RoleTable;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * Prefix id table on seeding
     * 00000001 User
     * 00000002 NotificationTable
     *
     * @return void
     */
    public function run()
    {
        $this->call(ModelTrailerSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(NotificationSeeder::class);
        $this->call(SparepartSeeder::class);
        $this->call(TypeJobSeeder::class);
        $this->call(TypeMaintenanceSeeder::class);
        $this->call(TypeRoleSeeder::class);
        $this->call(TypeTrailerSeeder::class);
        $this->call(ModelVehicleSeeder::class);
        $this->call(TypeVehicleSeeder::class);
    }
}
