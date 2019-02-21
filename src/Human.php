<?php
/**
 * Created by PhpStorm.
 * User: nurimantjiptarto
 * Date: 2019-02-14
 * Time: 05:45
 */

declare(strict_types=1);

final class Human extends Animal
{

    public function hasHands(): bool {
        return true;
    }

    public function canWalk(): bool{
        return true;

    }


}