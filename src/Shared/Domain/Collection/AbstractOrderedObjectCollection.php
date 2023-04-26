<?php

declare(strict_types=1);

namespace App\Shared\Domain\Collection;

use App\Shared\Domain\Collection\Exception\InvalidCollectionItem;

abstract class AbstractOrderedObjectCollection implements OrderableCollectionInterface
{
    protected array $items = [];

    /**
     * @throws InvalidCollectionItem
     */
    public function __construct(array $items = [])
    {
        foreach ($items as $item) {
            $this->addItem($item);
        }
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function isEmpty(): bool
    {
        return count($this->items) === 0;
    }

    public function getItem(int $index): ?object
    {
        return array_key_exists($index, $this->items) ? $this->items[$index] : null;
    }

    public function hasItem(int $index): bool
    {
        return array_key_exists($index, $this->items);
    }

    public function removeItem(int $index)
    {
        unset($this->items[$index]);
    }

    abstract protected function validateItem(object $item): bool;
}