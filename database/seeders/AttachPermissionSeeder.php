<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class AttachPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('name', '=', 'admin')->first();
        $permissions = Permission::where('name', 'like', '%user')
            ->orWhere('name', 'like', '%personnel')
            ->orWhere('name', 'like', '%categorie')
            ->orWhere('name', 'like', '%agence')
            ->orWhere('name', 'like', '%objet')
            ->orWhere('name', '=', 'show-demande')
            ->orWhere('name', '=', 'edit-demande')
            ->orWhere('name', '=', 'update-demande')
            ->orWhere('name', '=', 'delete-demande')
            ->orWhere('name', '=', 'index-demande')
            ->get();

        foreach ($permissions as $p) {
            $admin->attachPermission($p);
        }

        $personnel = Role::where('name', '=', 'personnel')->first();
        $permissions = Permission::where('name', 'like', '%personnel')
            ->orWhere('name', 'like', '%categorie')
            ->orWhere('name', 'like', '%agence')
            ->orWhere('name', 'like', '%objet')
            ->orWhere('name', '=', 'show-demande')
            ->orWhere('name', '=', 'edit-demande')
            ->orWhere('name', '=', 'update-demande')
            ->orWhere('name', '=', 'delete-demande')
            ->orWhere('name', '=', 'index-demande')
            ->get();

        foreach($permissions as $p){
            $personnel->attachPermission($p);
        }

        $client = Role::where('name', '=', 'client')->first();
        $permissions = Permission::where('name', 'like', '%client')
            ->orWhere('name', 'like', '%suggestion')
            ->orWhere('name', 'like', '%signaler')
            ->orWhere('name', 'like', 'show-objet')
            ->orWhere('name', 'like', 'index-objet')
            ->orWhere('name', '=', '%demande')
            ->get();

        foreach($permissions as $p){
            $client->attachPermission($p);
        }
    }
}
