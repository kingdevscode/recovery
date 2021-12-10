<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table='users';
    protected $primaryKey='id';
    protected $fillable=['name', 'prenom','num_cni','telephone','poste', 'email','password','id_role','id_agence'] ;

    public function id_role(){
        return $this->belongsTo('App\Models\role');
    }
    public function id_agence(){
        return $this->belongsTo('App\Models\agence');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
   /* protected $fillable = [
        'name',
        'email',
        'password',
    ];*/

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
