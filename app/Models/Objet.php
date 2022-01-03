<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objet extends Model
{
    use HasFactory;

    protected $table='objets';
    protected $primaryKey='id';
    protected $fillable=['nom_objet', 'lieu_trouvail','date_trouvail',
    'date_enregistrement','date_restitution','statut_objet','description_o
    ','photo','id_categorie','id_user'] ;

    public function id_categorie(){
        return $this->belongsTo('App/Models/Categorie');
    }

    public function id_user(){
        return $this->belongsTo('App/Models/User');
    }
}
