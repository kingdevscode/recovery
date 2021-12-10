<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Agence;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user2 = new User();
        $user2->name = "corine";
        $user2->prenom = "dtc";
        $user2->num_cni="oop2er";
        $user2->telephone="673480093";
        $user2->poste = "chef de service";
        $user2->email = "corine@gmail.com";
        $user2->password = bcrypt('0987654321');
        $user2->id_role = "1";
        $user2->id_agence = "1";
        $user2->save();


        $user3 = new User();
        $user3->name = "test";
        $user3->prenom = "test";
        $user2->num_cni="oop2er";
        $user2->telephone="673480093";
        $user3->poste = "stagiaire";
        $user3->email = "test02@gmail.com";
        $user3->password = bcrypt('0987654321');
        $user3->id_role = "2";
        $user3->id_agence = "1";
        $user3->save();


        
    }
}
