<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        DB::table('users')->insert([
            'nom' => Str::random(10),
            'prenom' => Str::random(10),
            // 'dateNaissance' => 02/05/2023,
            'role' => Str::random(10),
            'adresse' => Str::random(10),
            'genre' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Str::random(10),
            'categorie_id' => 4
        ]);
    }
}
