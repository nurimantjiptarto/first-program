<?php
declare(strict_types=1);


final class Bird extends Animal
{

    public function hasWings(): bool {
        return true;
    }

    public function canFly(): bool{
        return true;
    }

    

}
