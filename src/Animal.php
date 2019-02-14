<?php
declare(strict_types=1);


abstract class Animal
{

    private $name;
    private $appendages;


    public function __construct(string $name, int $appendages)
    {
        $this->name = $name;
        $this->appendages = $appendages;
    }


    public function __toString(): string
    {
        return $this->name;
    }

}
