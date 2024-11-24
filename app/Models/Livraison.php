<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $table='Livraisons';

    protected $fillable = [

        'commande_id',

    ];




    public function commande(){
        
        return $this->belongsTo(Commande::class);
    }

    public function Users(){
        
        return $this->belongsTo(User::class);
    }


    public function avis(){
        
        return $this->hasMany(Avis::class);
    }
}


