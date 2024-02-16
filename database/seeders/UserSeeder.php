<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 9; $i++) { 
            $faker = Faker::create();
        $user = new User();
        $user->name = $faker->firstNameFemale;
        $user->email = $faker->text;
        $user->save();
        }
    }
}
