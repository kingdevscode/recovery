<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = new Role();
        $role1->nom_role = "admin";
        $role1->description_r = "resposable des differentes depenses";
        $role1->save();

        $role2 = new Role();
        $role2->nom_role = "super_admin";
        $role2->description_r = "resposable des differentes depenses";
        $role2->save();



    }
}
