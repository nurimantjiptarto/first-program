<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FileTest extends TestCase
{

    public function testDataDirectory() {
        $this->assertDirectoryExists('data');
    }
    public function testCSVFileExists() {
        $this->assertFileExists('data/birdtypes.csv');
    }

    public function testCSVIsReadable(){
        $this-> assertFileIsReadable('data/birdtypes.csv');
    }


    public function testFileObject() {
        $this->assertInstanceOf(File::class, new File());
    }

    public function testReadCSVtoArrayExists() {

        $this->assertTrue(
            method_exists(File::class, 'readCSVtoArray')
        );
    }

    public function testReadCSVtoArray() {

        $records = File::readCSVtoArray("data/birdtypes.csv",'Bird');
        print_r($records);

    }

    public function testNumberOfFileContent{
        $this->assertCount(3, 'data/birdtypes.csv');
    }

    public function testCheckingTable(){
        $this- >assertFileExists('src/BirdTable.csv');

    }
}