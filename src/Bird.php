<?php
declare(strict_types=1);



class Bird
{
    private $family;
    private $name;
    private $location;


    public function __construct(string $family, string $name, string $location)
    {
        $this->family = $family;
        $this->name = $name;
        $this->location = $location;
    }


    public function asTableRow(): string
    {
        return "<tr><td>" . $this->family . "</td>" .
            "<td>" . $this->name . "</td>" .
            "<td>" . $this->location . "</td></tr>";
    }


    public static function asTable(array $records): void
    {
        echo "<thead><th>Family</th><th>Name</th><th>Location</th></thead><tbody>";
        foreach ($records as $bird)
            echo $bird->asTableRow();
        echo "</tbody>";


    }

    public static function asTableFromCSV(string $filename): void {
        Bird::asTable(
            BirdFactory::createFromCSV($filename)
        );
    }
}


class BirdFactory {
    public static function create(string $family, string $name, string $location): Bird {
        return new Bird($family, $name, $location);
    }

    public static function createFromCSV(string $filename): array {
        $data = Utils\File::readCSVToArray($filename);
        $records = [];
        foreach ($data as $record)
            $records[] = BirdFactory::create(
                $record->BirdFamily, $record->BirdName, $record->BirdLocation
            );
        return $records;
    }
}
