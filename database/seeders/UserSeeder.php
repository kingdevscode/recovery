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
        $user2->email = "corine@gmail.com";
        $user2->password = bcrypt('0987654321');
      
        $user2->save();


        $user3 = new User();
        $user3->name = "test";
        $user3->prenom = "test";
        $user3->num_cni="oop2er"; // ceci est attribuer au user2 après sa sauvegarde... erreur??
        $user3->telephone="673480093"; // ceci est attribuer au user2 après sa sauvegarde... erreur??
        $user3->email = "test02@gmail.com";
        $user3->password = bcrypt('password');

        $user3->save();



    }
}
