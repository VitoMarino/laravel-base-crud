<?php

namespace Database\Seeders;

use App\Functions\Helpers;
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
        // Questa riga di codice mi serviva qual'ora avessi la funzione nello stesso file
        // $animal = $this->getCsvInfo(__DIR__ . '/animals.csv');

        $animal = Helpers::getCsvInfo(__DIR__ . '/animals.csv');

        foreach ($animal as $index => $singleAnimal) {
            if ($index > 0) {
                $newAnimal = new Animal();
                $newAnimal->name = $singleAnimal[1];
                $newAnimal->description = $singleAnimal[2];
                $newAnimal->species = $singleAnimal[3];
                $newAnimal->image = $singleAnimal[4];
                $newAnimal->created_at = $singleAnimal[5];
                $newAnimal->updated_at = $singleAnimal[6];
                $newAnimal->save();
            }


        }
    }
}
