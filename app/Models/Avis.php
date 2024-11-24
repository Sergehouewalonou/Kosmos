<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $table='Avis';

    protected $fillable = [
        'message',
        'livraison_id'
        
       
    ];

    public function livraison()
    {
        
        return $this->belongsTo(Livraison::class);
    }

}
