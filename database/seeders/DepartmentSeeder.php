<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("departments")->insert([
            [
                "name"=>"HAT",
                "date"=>"1992-10-09",
                "address"=>"Mĩ Đình HN",
                "email"=>"abc@gmail.com",
                "telephone"=>"0123456789",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=>"TQH",
                "date"=>"1997-10-09",
                "address"=>"Mĩ Đình HN",
                "email"=>"abc@gmail.com",
                "telephone"=>"0123456789",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=>"NMD",
                "date"=>"1997-10-09",
                "address"=>"Mĩ Đình HN",
                "email"=>"abc@gmail.com",
                "telephone"=>"0123456789",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=>"TQT",
                "date"=>"1997-10-09",
                "address"=>"Mĩ Đình HN",
                "email"=>"abc@gmail.com",
                "telephone"=>"0123456789",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=>"XXX",
                "date"=>"1997-10-09",
                "address"=>"Mĩ Đình HN",
                "email"=>"abc@gmail.com",
                "telephone"=>"0123456789",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=>"YYY",
                "date"=>"1997-10-09",
                "address"=>"Mĩ Đình HN",
                "email"=>"abc@gmail.com",
                "telephone"=>"0123456789",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=>"ZZZ",
                "date"=>"1997-10-09",
                "address"=>"Mĩ Đình HN",
                "email"=>"abc@gmail.com",
                "telephone"=>"0123456789",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
        ]);
    }
}
