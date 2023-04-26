<?php

declare(strict_types=1);

namespace App\Shared\Domain\Exception;

use Throwable;

class NotValidNaturalNumberException extends DomainException
{
    const MESSAGE = "Number cannot be negative";

    public function __construct(Throwable $previous = null)
    {
        parent::__construct(self::MESSAGE, $previous?->getCode() ?? 0, $previous);
    }
}