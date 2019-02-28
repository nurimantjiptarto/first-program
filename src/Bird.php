<?php
declare(strict_types=1);


final class Bird extends Animal
{
    public $shape;
    public $location;

    public function hasWings(): bool {
        return true;
    }

    public function canFly(): bool{
        return true;
    }

    public static function fromCSVFile($fileName): array { 
        if (($handle = fopen($fileName, "r")) === FALSE) {
            fclose($handle);
            return [];
        }

        while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if ($ignoreNameRow == NULL) {
                $ignoreNameRow = true;
                continue;
            }

            $bird = new Bird($row[1], 4);
            $bird->shape = $row[0];
            $bird->location = $row[2];
            $result[] = $bird;
        }

        fclose($handle);
        return $result;
    }

}
