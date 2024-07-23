<?php
namespace App\Functions;

// Questa funzione serve per far aprire e leggere un file .csv
class Helpers {
    public static function getCsvInfo($filePath)
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
