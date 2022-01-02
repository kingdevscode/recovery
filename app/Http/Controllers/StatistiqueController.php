<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Agence;
use App\Models\Client;
use App\Models\Role;
use App\Models\Suggestion;
use App\Models\Objet;
use App\Models\Reclamer;
use App\Models\Signaler;

use Illuminate\Http\Request;
use Suggestions;

class StatistiqueController extends Controller
{
   public function index(){
    $user = User::all()->count();
    $categorie = Categorie::all()->count();
    $client = Client::all()->count();
    $agence = Agence::all()->count();
    $Role = Role::all()->count();
    $suggestion = Suggestion::all()->count();
    $objet = Objet::all()->count();

    return view('home',compact('user','categorie',
    'client','agence','role','suggestion','objet','signaler'));
   }
}
