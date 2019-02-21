<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;


final class BirdTest extends TestCase
{

    public function testBirdIsAnAnimal(): void
    {
        $this->assertInstanceOf(Animal::class, new Bird('Owl', 4));
    }


    public function testBirdHasWings(): void
    {
        $bird = new Bird('Owl', 4);
        $this->assertTrue(method_exists($bird, "hasWings"));
        $this->assertTrue($bird->hasWings());
    }

    public function testBirdCanFly(): void
    {
        $bird = new Bird('Owl', 4);
        $this->assertTrue(method_exists($bird, "canFLy"));
        $this->assertTrue($bird->canFly());
    }

    public function testBirdDoesNotHaveHands(): void
    {
        $bird = new Bird('Columbidae', 4);
        $this->assertFalse(method_exists($bird, "hasHands"));
    }

}
