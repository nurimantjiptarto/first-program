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

    public function testBirdOutputsTable(): void
    {
        $bird = BirdTest::birdObject();
        $this->expectOutputRegex("(A.*B.*C)");
        Bird::asTable([$bird]);
    }

    public function testBirdOutputsAsTableFromCSV(): void
    {
        $bird = BirdTest::birdObject();
        $this->expectOutputRegex("(.*<tbody>.*)");
        $bird->asTableFromCSV("./data/birdtypes.csv");
    }

    public function testBirdOutputsAsTableFromCSV(): void
    {
        $bird = BirdTest::birdObject();
        $this->expectOutputRegex("(.*<tbody>.*)");
        $bird->asTableFromCSV("./data/birdtypes.csv");
    }

    public function testBirdOutputsTableRow(): void
    {
        $bird = BirdTest::birdObject();
        $expected = "<tr><td>A</td><td>B</td><td>C</td></tr>";
        $this->expectOutputString($expected);
        $bird->asTableRow();
    }


}
