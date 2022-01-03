<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table='clients';
    protected $primaryKey='id';
    protected $fillable=['name_client', 'prenom_client','num_cni_c','telephone_c', 'email_c', 'password_c',
    'ville_c','quartier_c','photo_c'] ;

}
