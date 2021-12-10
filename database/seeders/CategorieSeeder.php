<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie = new Categorie();
        $categorie->nom_categorie = "admin";
        $categorie->description_categorie = "resposable des differentes depenses";
        $categorie->save();
        
    }
}
