<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Agence;
use App\Models\Client;
use App\Models\Role;
use App\Models\Suggestion;
use App\Models\Objet;
use App\Models\demande;
use App\Models\Signale;

use Illuminate\Http\Request;


class StatistiqueController extends Controller
{
   public function index(){
    $user = User::all()->count();
    $categorie = Categorie::all()->count();
    $client = Client::all()->count();
    $agence = Agence::all()->count();
    $role = Role::all()->count();
    $suggestion = Suggestion::all()->count();
    $objet = Objet::all()->count();
    $signale = signale::all()->count();
    $demande = demande::all()->count();

    return view('home',compact('user','categorie',
    'client','agence','role','suggestion','objet','signale','demande'));
   }
}
