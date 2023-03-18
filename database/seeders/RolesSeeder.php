<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Coach']);
        $permission = Permission::create(['name' => 'coaches']);

        $permission->syncRoles($role);

        $user = User::find(9);

        $user->assignRole($role);
    }
}
