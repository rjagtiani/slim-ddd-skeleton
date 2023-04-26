<?php

declare(strict_types=1);

namespace App\Shared\Domain\Collection;

interface OrderableCollectionInterface extends CollectionInterface
{
    public function getItem(int $index): ?object;

    public function removeItem(int $index);

    public function isEmpty(): bool;

    public function hasItem(int $index): bool;
}