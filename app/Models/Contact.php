<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $table='Contacts';

    protected $fillable = [  
        'nom',
        'prenom',
        'email',
        'phone',
        'message'

    ];
}
