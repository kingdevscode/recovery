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
        $role1->description_r = "resposable de l'enregistrement du personnel et des objets";
        $role1->save();

        $role2 = new Role();
        $role2->nom_role = "employe";
        $role2->description_r = "personne chargee de l' enregisrement des objets";
        $role2->save();



    }
}
