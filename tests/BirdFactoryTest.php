<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;


final class BirdFactoryTest extends TestCase
{

    public function testBirdFactoryCreatesBird(): void
    {
        $bird = BirdFactory::create("A", "B", "C");
        $this->assertTrue(isSet($bird));
    }

    public function testCreateBirdArrayFromCSV(): void
    {
        $bird = BirdFactory::createFromCSV("./data/birdtypes.csv");
        $this->assertTrue(isSet($bird));
        $this->assertInstanceOf(Bird::class, $bird[0]);
    }

}
