<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use GuzzleHttp\Promise\Create;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission =
        [
            [
                'name' => 'create-client',
                'display_name' => 'ajout du client',
                'description' => 'ajout du client',
            ],
            [
                'name' => 'edit-client',
                'display_name' =>'edit du client',
                'description' => 'edit du client',
            ],
            [
                'name' => 'update-client',
                'display_name' => 'mise a jour du client clients',
                      'description' => 'mise a jour du client new blog',
            ],
            [
                'name' => 'index-client',
                'display_name' =>'listing du client',
                'description' => 'listing du client',
            ],
            [
                'name' => 'delete-client',
                'display_name' =>'supression du client',
                'description' => 'supression du client',
            ],
            [
                'name' => 'show-client',
                'display_name' =>'detail du client',
                'description' => 'detail du client',
            ],

//objet
            [
                'name' => 'create-objet',
                'display_name' => 'ajout du objet',
                'description' => 'ajout du objet',
            ],
            [
                'name' => 'edit-objet',
                'display_name' =>'edit du objet',
                'description' => 'edit du objet',
            ],
            [
                'name' => 'update-objet',
                'display_name' => 'mise a jour du objet objets',
                      'description' => 'mise a jour du objet new blog',
            ],
            [
                'name' => 'index-objet',
                'display_name' =>'listing de objet',
                'description' => 'listing de objet',
            ],
            [
                'name' => 'delete-objet',
                'display_name' =>'supression de objet',
                'description' => 'supression de objet',
            ],
            [
                'name' => 'show-objet',
                'display_name' =>'detail de objet',
                'description' => 'detail de objet',
            ],
            //demande

            [
                'name' => 'create-demande',
                'display_name' => 'ajout de la demande',
                'description' => 'ajout de la demande',
            ],
            [
                'name' => 'edit-demande',
                'display_name' =>'edit de la demande',
                'description' => 'edit de  la demande',
            ],
            [
                'name' => 'update-demande',
                'display_name' => 'mise a jour de la demande ',
                      'description' => 'mise a jour de la demande',
            ],
            [
                'name' => 'index-demande',
                'display_name' =>'listing du demande',
                'description' => 'listing du demande',
            ],
            [
                'name' => 'delete-demande',
                'display_name' =>'supression du demande',
                'description' => 'supression du demande',
            ],
            [
                'name' => 'show-demande',
                'display_name' =>'detail du demande',
                'description' => 'detail du demande',
            ],

        //categorie
        [
            'name' => 'create-categorie',
            'display_name' => 'ajout de la categorie',
            'description' => 'ajout de la categorie',
        ],
        [
            'name' => 'edit-categorie',
            'display_name' =>'edit de la categorie',
            'description' => 'edit de  la categorie',
        ],
        [
            'name' => 'update-categorie',
            'display_name' => 'mise a jour de la categorie ',
                  'description' => 'mise a jour de la categorie',
        ],
        [
            'name' => 'index-categorie',
            'display_name' =>'listing de la categorie',
            'description' => 'listing de la categorie',
        ],
        [
            'name' => 'delete-categorie',
            'display_name' =>'supression de la categorie',
            'description' => 'supression de la categorie',
        ],
        [
            'name' => 'show-categorie',
            'display_name' =>'detail de la categorie',
            'description' => 'detail de la categorie',
        ],

        //suggestion
        [
            'name' => 'create-suggestion',
            'display_name' => 'ajout de la suggestion',
            'description' => 'ajout de la suggestion',
        ],
        [
            'name' => 'edit-suggestion',
            'display_name' =>'edit de la suggestion',
            'description' => 'edit de  la suggestion',
        ],
        [
            'name' => 'update-suggestion',
            'display_name' => 'mise a jour de la suggestion ',
                  'description' => 'mise a jour de la suggestion',
        ],
        [
            'name' => 'index-suggestion',
            'display_name' =>'listing de la suggestion',
            'description' => 'listing de la suggestion',
        ],
        [
            'name' => 'delete-suggestion',
            'display_name' =>'supression de la suggestion',
            'description' => 'supression de la suggestion',
        ],
        [
            'name' => 'show-suggestion',
            'display_name' =>'detail de la suggestion',
            'description' => 'detail de la suggestion',
        ],

        //personnel
        [
            'name' => 'create-personnel',
            'display_name' => 'ajout de la personnel',
            'description' => 'ajout de la personnel',
        ],
        [
            'name' => 'edit-personnel',
            'display_name' =>'edit de la personnel',
            'description' => 'edit de  la personnel',
        ],
        [
            'name' => 'update-personnel',
            'display_name' => 'mise a jour de la personnel ',
                  'description' => 'mise a jour de la personnel',
        ],
        [
            'name' => 'index-personnel',
            'display_name' =>'listing du personnel',
            'description' => 'listing du personnel',
        ],
        [
            'name' => 'delete-personnel',
            'display_name' =>'supression du personnel',
            'description' => 'supression du personnel',
        ],
        [
            'name' => 'show-personnel',
            'display_name' =>'detail du personnel',
            'description' => 'detail du personnel',
        ],

        //agence
        [
            'name' => 'create-agence',
            'display_name' => 'ajout agence',
            'description' => 'ajout  agence',
        ],
        [
            'name' => 'edit-agence',
            'display_name' =>'edit de agence',
            'description' => 'edit de agence',
        ],
        [
            'name' => 'update-agence',
            'display_name' => 'mise a jour de agence ',
                  'description' => 'mise a jour de  agence',
        ],
        [
            'name' => 'index-agence',
            'display_name' =>'listing de agence',
            'description' => 'listing de agence',
        ],
        [
            'name' => 'delete-agence',
            'display_name' =>'supression de agence',
            'description' => 'supression de agence',
        ],
        [
            'name' => 'show-agence',
            'display_name' =>'detail du agence',
            'description' => 'detail du agence',
        ],



        //signaler_objet
        [
            'name' => 'create-signaler',
            'display_name' => 'ajout de la signaler',
            'description' => 'ajout de la signaler',
        ],
        [
            'name' => 'edit-signaler',
            'display_name' =>'edit de la signaler',
            'description' => 'edit de  la signaler',
        ],
        [
            'name' => 'update-signaler',
            'display_name' => 'mise a jour de la signaler ',
                  'description' => 'mise a jour de la signaler',
        ],
        [
            'name' => 'index-signaler',
            'display_name' =>'listing du signaler',
            'description' => 'listing du signaler',
        ],
        [
            'name' => 'delete-signaler',
            'display_name' =>'supression du signaler',
            'description' => 'supression du signaler',
        ],
        [
            'name' => 'show-signaler',
            'display_name' =>'detail du signaler',
            'description' => 'detail du signaler',
        ],
        //user
        [
            'name' => 'create-user',
            'display_name' => 'ajout de la user',
            'description' => 'ajout de la user',
        ],
        [
            'name' => 'edit-user',
            'display_name' =>'edit de la user',
            'description' => 'edit de  la user',
        ],
        [
            'name' => 'update-user',
            'display_name' => 'mise a jour de la user ',
                  'description' => 'mise a jour de la user',
        ],
        [
            'name' => 'index-user',
            'display_name' =>'listing du user',
            'description' => 'listing du user',
        ],
        [
            'name' => 'delete-user',
            'display_name' =>'supression du user',
            'description' => 'supression du user',
        ],
        [
            'name' => 'show-user',
            'display_name' =>'detail du user',
            'description' => 'detail du user',
        ],

            ];
            foreach($permission as $p)
            {
                Permission::create($p);
            }

    }
}
