<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
    }
}
