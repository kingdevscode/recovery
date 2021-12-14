<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Agence;

class AgenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agence1 = new Agence();
        $agence1->nom_agence = "agence_foto";
        $agence1->ville_agence = "dschang";
        $agence1->telephone_agence = "644939032";
        $agence1->description_agence = "agence situee au marche foto en face de la paroisse saint Mathias";
        $agence1->save();

        $agence = new Agence();
        $agence1->nom_agence = "agence_Ngui";
        $agence1->ville_agence = "dschang";
        $agence1->telephone_agence = "644939032";
        $agence->description_agence ="agence situee au marche foto en face de la paroisse saint Mathias";
        $agence->save();
    }
}
