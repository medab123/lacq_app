<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Schema;


class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Schema::dropIfExists('users');
        $user = User::create([
            'name' => 'ELABIDI',
            'last_name' => 'Mohammed',
            'email' => 'mohammed.el-abidi@elephant-vert.com',
            'is_active' => true,
            'password' => bcrypt('Xwgpdz1ds5@'),
            'avatar' => 'user.png',

        ]);
        $role = Role::create(['id' => 1, 'name' => 'Super Admin']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
        $role = Role::create(['id' => 2,'name' => 'Admin']);
        $role = Role::create(['id' => 3,'name' => 'Responsable']);
        $role = Role::create(['id' => 4,'name' => 'Coordinateur']);
        $role = Role::create(['id' => 5,'name' => 'Receptionist']);
    }
}
