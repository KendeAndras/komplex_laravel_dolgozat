<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class PerfumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( "perfumes" )->insert([
            "name" => "axe",
            "type" => "ferfi",
            "price" => "3000",
        ]);

        DB::table( "perfumes" )->insert([
            "name" => "old spice",
            "type" => "ferfi",
            "price" => "2800",
        ]);

        DB::table( "perfumes" )->insert([
            "name" => "nivea",
            "type" => "noi",
            "price" => "2000",
        ]);

        DB::table( "perfumes" )->insert([
            "name" => "rexona",
            "type" => "noi",
            "price" => "4000",
        ]);

        DB::table( "perfumes" )->insert([
            "name" => "kinai",
            "type" => "unisex",
            "price" => "1500",
        ]);
    }
}
