<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    use HasFactory;

    protected $table = 'suggestions';
    protected $primaryKey = 'id';

    protected $fillable = ['description', 'posted_at', 'id_client'];

    public function id_client(){
        return $this->belongsTo('App/Models/Client');
    }
}
