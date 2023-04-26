<?php

declare(strict_types=1);

namespace App\Shared\Domain\Collection;

use App\Shared\Domain\Collection\Exception\InvalidCollectionItem;

abstract class AbstractUnOrderedObjectCollection implements CollectionInterface
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
     * @throws InvalidCollectionItem
     */
    public function addItem(object $item): void
    {
        if (!$this->validateItem($item)) {
            throw new InvalidCollectionItem($item);
        }
        $this->items[] = $item;
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

    abstract protected function validateItem(object $item): bool;
}