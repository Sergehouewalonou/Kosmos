<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $table='Materiels';

    protected $fillable = [
        'name',
        'description',
        'unite',
        'prix',
        'file',
        'statut',
        'typemateriel_id'
    ];


    
    public function typemateriel(){
        
        return $this->belongsTo(Typemateriel::class);
    }

    public function commandes(){
        
        return $this->belongsToMany(Commande::class);
    }

}
