<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++) {
            $animal = new Animal();
            $animal->name = $faker->text(10);
            $animal->description = $faker->text(10);
            $animal->species = $faker->text(10);
            $animal->save();
        }
    }
}
