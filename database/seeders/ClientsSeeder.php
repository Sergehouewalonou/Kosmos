<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Client;
use Illuminate\Database\Seeder;
use Database\Seeders\ClientsSeeder;
use Illuminate\Support\Facades\Hash;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'user_id'=> 1 ,    
            ]);

        DB::table('clients')->insert([
            'user_id'=> 2 ,    
            ]);
    }
}
