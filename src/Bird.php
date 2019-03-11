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
}



class BirdFactory {
    public static function create(string $family, string $name, string $location) {
        return new Bird($family, $name, $location);
    }
}
