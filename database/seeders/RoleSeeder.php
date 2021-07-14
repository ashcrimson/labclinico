<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(["name" => "Developer"]);
        Role::create(["name" => "Superadmin"]);
        Role::create(["name" => "Admin"]);
        $medico = Role::create(["name" => "Medico"]);

        $medico->syncPermissions(Permission::pluck('name')->toArray());

        Role::create(["name" => "User"]);
    }
}
