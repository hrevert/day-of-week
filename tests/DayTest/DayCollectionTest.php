<?php
namespace Hrevert\DayTest;

use Hrevert\Day\DayCollection;
use Hrevert\Day\Day;

class DayCollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testGetExceptionWithInvalidDay()
    {
        $days = new DayCollection;
        $this->setExpectedException('Hrevert\Day\Exception\InvalidArgumentException');
        $days->set(1, 'asdf');
    }

    public function testGetExceptionWithInvalidDayKey()
    {
        $days = new DayCollection;
        $monday = Day::MONDAY();
        $sunday = Day::SUNDAY();
        $this->setExpectedException('Hrevert\Day\Exception\InvalidArgumentException');
        $days->set($monday->getValue(), $sunday);
    }

    public function addDay()
    {
        $days = new DayCollection;
        $sunday = Day::SUNDAY();
        $this->assertFalse($days->contains($sunday));
        $days->add($sunday);
        $this->assertTrue($days->contains($sunday));
    }

    public function testConstructor()
    {
        $days = new DayCollection([Day::SUNDAY(), Day::MONDAY()]);
        $this->assertCount(2, $days);
        $this->assertTrue($days->contains(Day::SUNDAY()));
        $this->assertTrue($days->contains(Day::MONDAY()));
    }
}
