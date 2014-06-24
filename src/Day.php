<?php
namespace Hrevert\Day;

use MabeEnum\Enum;

class Day extends Enum
{
    //ISO-8601 numeric representation of days of a week 
    // @see http://en.wikipedia.org/wiki/ISO_8601  
    const MONDAY    = 1;
    const TUESDAY   = 2;
    const WEDNESDAY = 3;
    const THURSDAY  = 4;
    const FRIDAY    = 5;
    const SATURDAY  = 6;
    const SUNDAY    = 7;

    /**
     * @var array
     */
    protected static $options = [
        self::MONDAY    => 'Monday',
        self::TUESDAY   => 'Tuedsay',
        self::WEDNESDAY => 'Wednesday',
        self::THURSDAY  => 'Thursday',
        self::FRIDAY    => 'Friday',
        self::SATURDAY  => 'Saturday',
        self::SUNDAY    => 'Sunday',
    ];

    /**
     * @return array
     */
    public static function getOptions()
    {
        return self::$options;
    }

    /**
     * @return array
     */
    public static function getAllowedValues()
    {
        return array_keys(self::getOptions());
    }

    /**
     * Gets instance of today day
     *
     * @return self
     */
    public static function getToday()
    {
        $todayIndex = (int) date('N');

        return self::get($todayIndex);
    }
}
