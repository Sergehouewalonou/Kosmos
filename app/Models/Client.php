<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Client extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table='clients';

    protected $fillable = [

        'user_id',
      
    ];

    public function user()
    {
        
        return $this->belongsTo(User::class);
    }
    public function commande()
    {
        
        return $this->hasMany(Commande::class);
    }

}
