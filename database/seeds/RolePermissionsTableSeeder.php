<?php

use Illuminate\Database\Seeder;
use App\Role;
use \App\Permission;

class RolePermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = Role::all();
        $permissions = Permission::all();
        foreach($roles as $role) {
            $role->attachPermissions($permissions);
        }
    }
}
