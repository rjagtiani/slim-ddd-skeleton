<?php

namespace Tests\Unit\Shared\ValueObject;

use App\Shared\Domain\ValueObject\Date;
use DateTime;
use PHPUnit\Framework\TestCase;

class DateTest extends TestCase
{
    private const FORMAT = 'Y-m-d';

    public function testConstruct()
    {
        $date = new DateTime('now');
        $sut = new Date($date);
        $this->assertEquals($date->format(self::FORMAT), $sut->value());
    }
}
