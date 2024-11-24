<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
        'user_id'=> 3 ,

        ]);

        
    }
}
