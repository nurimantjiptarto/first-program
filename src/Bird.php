<?php
declare(strict_types=1);


class Bird {
    private $family;
    private $name;
    private $location;


    public function __construct(string $family, string $name, string $location) {
        $this->family = $family;
        $this->name = $name;
        $this->location = $location;
    }


    public function asTableRow() {
        return "<tr><td>" . $this->family . "</td>" .
            "<td>" . $this->name . "</td>" .
            "<td>" . $this->location . "</td></tr>";
    }


    public static function asTable(object $records) {
        echo "<thead><th>Family</th><th>Name</th><th>Location</th></thead><tbody>";
        foreach ($records as $bird)
            echo $bird->asTableRow();
        echo "</tbody>";
    }
}



class BirdFactory {
    public static function create(string $family, string $name, string $location) {
        return new Bird($family, $name, $location);
    }
}
