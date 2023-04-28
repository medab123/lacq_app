<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

use App\Models\User;
use Spatie\Permission\Models\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // roles permission
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           // users permission
           'user-list',
           'user-create',
           'user-edit',
           'user-delete',
           // matrices permission
           'matrice-list',
           'matrice-create',
           'matrice-edit',
           'matrice-delete',
           // menus permission
           'menu-list',
           'menu-create',
           'menu-edit',
           'menu-delete',
           // commercials permission
           'commercial-list',
           'commercial-create',
           'commercial-edit',
           'commercial-delete',
           // lieus permission
           'lieu-list',
           'lieu-create',
           'lieu-edit',
           'lieu-delete',
           // client permission
           'client-list',
           'client-create',
           'client-edit',
           'client-delete',
           // commandes permission
           'commande-list',
           'commande-create',
           'commande-edit',
           'commande-valider',
           'commande-reject',
           'commande-delete',
           // dashbord permission
           'dashboard-list',
           // analyses permission
           'analyses-list',
           // dashbord-admin permission
           'dashboard-admin-list',
           // log permissin
           'activity-list',

        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }

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
        User::find(2)->assignRole([$role->id]);
        User::find(3)->assignRole([$role->id]);
        $role = Role::create(['id' => 2,'name' => 'Admin']);
        $role = Role::create(['id' => 3,'name' => 'Responsable']);
        $role = Role::create(['id' => 4,'name' => 'Coordinateur']);
        $role = Role::create(['id' => 5,'name' => 'Receptionist']);


    }
}
