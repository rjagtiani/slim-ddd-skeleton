<?php

declare(strict_types=1);

namespace App\Shared\Domain\ValueObject;

use DateTime;

class Date
{
    private const FORMAT = 'Y-m-d';

    public function __construct(private readonly DateTime $date)
    {
        $this->date->setTime(0, 0, 0);
    }

    public function value(): string
    {
        return $this->date->format(self::FORMAT);
    }

    public function timestamp(): int
    {
        return $this->date->getTimestamp();
    }
}