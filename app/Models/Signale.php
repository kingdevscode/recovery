<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signale extends Model
{
    use HasFactory;

    protected $table = 'signales';
    protected $primaryKey = 'id';

    protected $fillable = ['description_signale', 'lieu_perte', 'date_perte', 'statut_signale', 'id_categorie','id_client'];

    public function id_categorie(){
        return $this->belongsTo('App/Models/Categorie');
    }
    public function id_client(){
        return $this->belongsTo('App/Models/Client');
    }
}
