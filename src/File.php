<?php
declare(strict_types=1);
namespace Utils;



class File
{
    public static function readCSVToArray(string $filename): array
    {
        $records = [];
        if (($handle = fopen($filename, "r")) === FALSE)
            return $records;

        $count = 0;
        while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if ($count++ < 1)
                $fieldNames = $row;
            else
                $records[] = (object) array_combine($fieldNames, $row);
        }

        fclose($handle);
        return $records;
    }
}
