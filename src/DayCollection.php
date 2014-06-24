<?php
namespace Hrevert\Day;

use Doctrine\Common\Collections\ArrayCollection;

class DayCollection extends ArrayCollection
{
    public function __construct(array $days = [])
    {
        parent::__construct();
        foreach ($days as $day) {
            $this->addDay($day);
        }
    }

    public function set($key, $day)
    {
        if (!$day instanceof Day) {
            throw new Exception\InvalidArgumentException(sprintf(
                '%s expects argument 2 to be an instance of Hrevert\Day\Day, %s provided instead',
                __METHOD__,
                is_object($day) ? get_class($day) : gettype($day)
            ));
        }

        return parent::set($key, $day);
    }

    public function addDay(Day $day)
    {
        $this->set($day->getValue(), $day);
    }

    public function add($day)
    {
        $this->addDay($day);
    }
}
