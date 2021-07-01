<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call([
//           LeadSeeder::class,
//           CustomerSeeder::class
//        ]);
        DB::table("admins")->insert([
            "name"=>"Administrator",
            "email"=>"admin@gmail.com",
            "password"=>bcrypt("12345678")
        ]);
    }
}
