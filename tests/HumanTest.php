<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;


final class HumanTest extends TestCase
{

    public function testHumanIsAnAnimal(): void
    {
        $this->assertInstanceOf(Animal::class, new Human('Jeff', 13));
    }


    public function testHumanHasHands(): void
    {
        $human = new Human('Jeff', 13);
        $this->assertTrue(method_exists($human, "hasHands"));
        $this->assertTrue($human->hasHands());
    }

    public function testHumanCanWalk(): void
    {
        $human= new Human('Becky', 9);
        $this->assertTrue(method_exists($human, "canWalk"));
        $this->assertTrue($human-> canWalk());
    }


    public function testHumanDoesNotHaveWings(): void
    {
        $human = new Human('Rachel', 4);
        $this->assertFalse(method_exists($human, "hasWings"));
    }

}
