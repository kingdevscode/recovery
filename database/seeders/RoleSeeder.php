<?php

namespace Database\Seeders;
use App\Models\Role;

use Illuminate\Database\Seeder;
use GuzzleHttp\Promise\Create;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role =
        [
            [
                'name' => 'admin',
                'display_name' => 'administrateur du systeme',
                'description' => 'admin a la charge de tous ce qui concerne toute ce qui concerne la palteforme', // optional
            ],
            [ 'name' => 'personnel',
            'display_name' => 'personnel',
            'description' => 'personnel a la charge d enregistrer les objets', // optional
            ],
            [ 'name' => 'client',
            'display_name' => 'client', // optional
            'description' => 'client a la charge de declarer et signaler les objets', // optional
            ],
        ];
        foreach($role as $r)
        {
            Role::create($r);
        }
    }
}
