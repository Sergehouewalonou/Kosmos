<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image',
        'nom',
        'prenom',
        'telephone',
        'adresse',
        'ville',
        'email',
        'password',
    ];

    public function commande(){
        
        return $this->hasMany(Commande::class);
    }   
    
    public function livraison(){
        
        return $this->hasMany(Livraison::class);
    }

    public function clients(){
        
        return $this->hasMany(Client::class);
    }


    public function admins(){
        
        return $this->hasMany(Admin::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
