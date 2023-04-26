<?php

declare(strict_types=1);

namespace App\Shared\Domain\Collection;

use App\Shared\Domain\Collection\Exception\InvalidCollectionItem;

interface CollectionInterface
{
    /** @throws InvalidCollectionItem */
    public function addItem(object $item);

    public function getItems(): array;

    public function isEmpty(): bool;
}