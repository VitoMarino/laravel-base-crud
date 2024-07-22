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
        $animal = $this->getCsvInfo(__DIR__ . '/animals.csv');

        foreach ($animal as $index => $singleAnimal) {
            if ($index > 0) {
                $newAnimal = new Animal();
                $newAnimal->name = $singleAnimal[1];
                $newAnimal->description = $singleAnimal[2];
                // $newAnimal->species = $singleAnimal[3];
                // $newAnimal->timestamps = null;
                $newAnimal->save();
            }
        }
    }

    public function getCsvInfo($filePath)
    {
        $csvData = [];

        // Apri il file, e lo devi leggere con 'r'
        $fileData = fopen($filePath, 'r');

        if ($fileData === false) {
            throw new \InvalidArgumentException('File not found');
        }

        // Se lo trovi leggi riga per riga
        while (($csvRow = fgetcsv($fileData)) !== false) {
            $csvData[] = $csvRow;
        }
        // Chiudo il file
        fclose($fileData);

        return $csvData;
    }
}
