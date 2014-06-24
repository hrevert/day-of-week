<?php
namespace Hrevert\DayTest;

use Hrevert\Day\Day;

class DayTest extends \PHPUnit_Framework_TestCase
{
    public function testGetAllowedValues()
    {
        $days = Day::getAllowedValues();
        $this->assertCount(7, $days);
        foreach ($days as $id) {
            $day = Day::get($id);
            $this->assertInstanceOf('Hrevert\Day\Day', $day);
        }
    }

    public function testGetToday()
    {
        $day = Day::getToday();
        $this->assertInstanceOf('Hrevert\Day\Day', $day);
    }
}
