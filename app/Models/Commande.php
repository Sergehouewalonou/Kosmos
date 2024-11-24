<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $table='Commandes';

    protected $fillable = [  
        'payement',
        'option',
        'adresse_id',
        'user_id'

    ];

    public function user(){
        
        return $this->belongsTo(User::class);
    }

    public function adresse(){
        
        return $this->belongsTo(Adresse::class);
    }


    public function materiels(){
        
        return $this->belongsToMany(Materiel::class)->withPivot('qty');
    }

    public function livaison(){
        
        return $this->hasMany(Livraison::class);
    }
}
