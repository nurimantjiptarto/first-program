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
