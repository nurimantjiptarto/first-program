<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;


final class BirdTest extends TestCase
{

    public static function birdObject(): Bird
    {
        return new Bird("A", "B", "C");
    }

    public function testBirdCanBeCreated(): void
    {
        $bird = BirdTest::birdObject();
        $this->assertTrue(isSet($bird));
    }

}
