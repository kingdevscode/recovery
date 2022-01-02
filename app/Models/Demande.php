<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\App;

class Demande extends Model
{
    use HasFactory;

    protected $table='demandes';
    protected $primaryKey='id';
    protected $fillable = ['date_demande','date_traitement','statut', 'id_client', 'id_user'];

    public function id_client(){
        return $this->belongsTo('App\Models\Client');
    }

    public function id_user(){
        return $this->belongsTo('App\Models\User');
    }


}
