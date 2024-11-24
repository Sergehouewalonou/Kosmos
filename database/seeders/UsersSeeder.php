<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Database\Seeders\AdminSeeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'image' => 'storage/front/img/profile/avatar.png',
            'nom' => 'DOSSOU',
            'prenom' => 'Ange',
            'telephone' => '51 00 96 80',
            'adresse' => 'Porto',
            'email' => 'serge07@gmail.com',
            'ville' => 'Porto',
            'password' => Hash::make('serge++--')
    
            ]);

        DB::table('users')->insert([
            'image' => 'storage/front/img/profile/avatar.png',
            'nom' => 'ADAMOU',
            'prenom' => 'Jule',
            'telephone' => '51 84 00 80',
            'adresse' => 'Porto',
            'email' => 'serge08@gmail.com',
            'ville' => 'Porto',
            'password' => Hash::make('serge++--')
    
            ]);


        DB::table('users')->insert([
            'image' => 'storage/front/img/profile/avatar.png',
            'nom' => 'HOUEWALONOU',
            'prenom' => 'Serge',
            'telephone' => '51 84 96 80',
            'adresse' => 'Porto',
            'email' => 'serge09@gmail.com',
            'ville' => 'Porto',
            'password' => Hash::make('serge++--')
    
            ]);


            
    }
}
