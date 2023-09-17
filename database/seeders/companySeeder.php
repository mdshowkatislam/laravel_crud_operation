<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class companySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert(
           [
            [
           'name'=>'Tuhin',
           "email"=>"tuhin@gmail.com",
           "address"=>"cumilla",
           "link"=>"https://localhost:8000/public/image/com-img",
           "image"=>"tt1.jpg"


        ],
        [
            "name"=>"abul",
            "email"=>"abul@gmail.com",
            "address"=>"dhaka",
            "link"=>"https://localhost:8000/public/image/com-img",
            "image"=>"tt2.jpg"

         ],
        [
            "name"=>"kobul",
            "email"=>"kobul@gmail.com",
            "address"=>"rangpur",
            "link"=>"https://localhost:8000/public/image/com-img",
            "image"=>"tt3.jpg"

         ],
           ]


    );
    }
}
