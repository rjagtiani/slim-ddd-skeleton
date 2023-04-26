<?php

declare(strict_types=1);

namespace App\Shared\Domain\ValueObject;


use App\Shared\Domain\Exception\NotValidNaturalNumberException;

abstract class NaturalNumber
{
    private readonly int $number;

    /**
     * @throws NotValidNaturalNumberException
     */
    public function __construct(int $number)
    {
        if ($number <= 0) {
            throw new NotValidNaturalNumberException();
        }

        $this->number = $number;
    }

    public function value(): int
    {
        return $this->number;
    }
}