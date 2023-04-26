<?php

declare(strict_types=1);

namespace App\Shared\Domain\Collection\Exception;

use Exception;
use Throwable;

class InvalidCollectionItem extends Exception
{
    const MESSAGE = "Class %s is not allowed for collection";

    public function __construct(object $item, Throwable $previous = null)
    {
        parent::__construct(sprintf(self::MESSAGE, get_class($item)), $previous?->getCode() ?? 0, $previous);
    }
}