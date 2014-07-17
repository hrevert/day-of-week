day-of-week
===========
[![Master Branch Build Status](https://api.travis-ci.org/hrevert/day-of-week.png?branch=master)](http://travis-ci.org/hrevert/day-of-week)
[![Latest Stable Version](https://poser.pugx.org/hrevert/day-of-week/v/stable.png)](https://packagist.org/packages/hrevert/day-of-week)
[![Total Downloads](https://poser.pugx.org/hrevert/day-of-week/downloads.png)](https://packagist.org/packages/hrevert/day-of-week)

Day of week library

## Usage
Please read the docs of [php-enum](https://github.com/marc-mabe/php-enum) first.

```php
use Hrevert\Day\Day;

/** @var Day */
$day = Day::get(Day::MONDAY);
// or $day = Day::MONDAY();
// or $day = Day::getByName('MONDAY');
// or $day = Day::getByOrdinal(1);  i.e. find by ISO-8601 numeric representation of day
```

```php
use Hrevert\Day\Day;
use Hrevert\Day\DayCollection;

$days = new DayCollection(Day::SUNDAY(), Day::MONDAY());

var_dump($days->contains(Day::SUNDAY())); // bool(true)
var_dump($days->contains(Day::MONDAY())); // bool(true)

$days->remove(Day::MONDAY());
var_dump($days->contains(Day::MONDAY())); // bool(false)

$days->add(Day::MONDAY());
var_dump($days->contains(Day::MONDAY())); // bool(true)

```
Since `Hrevert\Day\DayCollection` is just an extension of [`Doctrine\Common\Collections\ArrayCollection`](https://github.com/doctrine/collections/blob/master/lib/Doctrine/Common/Collections/ArrayCollection.php), it should not be so difficult.