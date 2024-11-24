<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Adresse extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $table='Adresses';

    protected $fillable = [
        'ville',
        'arrondissement',
        'quartier',
        'situe'
       
    ];

    public function commandes(){
        
        return $this->hasMany(Commande::class);
    }

}
