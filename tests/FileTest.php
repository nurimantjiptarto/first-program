<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class FileTest extends TestCase
{
    public function testDataDirectory()
    {
        $this->assertDirectoryExists("data");
    }
    public function testCSVFileExists()
    {
        $this->assertFileExists("data/birdtypes.csv");
    }
    public function testCSVIsReadable()
    {
        $this->assertFileIsReadable("./data/birdtypes.csv");
    }
    public function testFileObject()
    {
        $this->assertInstanceOf(Utils\File::class, new Utils\File());
    }
    public function testReadCSVtoArrayExists()
    {
        $this->assertTrue(method_exists(Utils\File::class, "readCSVtoArray"));
    }
    public function testReadCSVtoArray()
    {
        $records = Utils\File::readCSVtoArray("./data/birdtypes.csv", "Bird");
        $this->assertEquals($records[0]->BirdFamily, "Auks");
        $this->assertEquals($records[1]->BirdName, "Black Phoebe");
        $this->assertEquals($records[2]->BirdLocation, "United States");
    }
    public function testNumberOfFileContent()
    {
        $records = Utils\File::readCSVtoArray("./data/birdtypes.csv", "Bird");
        $this->assertCount(3, $records);
    }
}
