<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typemateriel extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $table='Typemateriels';

    protected $fillable = [
        'libellé',
        'file',
        'option'
    ];


    
    public function materiel(){
        
        return $this->hasMany(Materiel::class);
    }

}
