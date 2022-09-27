<?php

declare(strict_types=1);

namespace App\Registry;

use App\Interface\PrototypeInterface;

class PrototypeRegistry
{
    private array $items = [];

    public function __construct()
    {
    }

    /**
     * Add an item to the registry
     *
     * @param string $id
     * @param PrototypeInterface $prototype
     * @return void
     */
    public function addItem(string $id, PrototypeInterface $prototype): void
    {
        $this->items[] = [
            'id' => $id,
            'prototype' => $prototype
        ];
    }

    /**
     * Get a registry prototype object by it's color 
     *
     * @param string $color
     * @return PrototypeInterface|array
     */
    public function getByColor(string $color): PrototypeInterface|array
    {
        $items = $this->items;
        if ([] !== $items) {
            foreach ($items as $item) {
                $prototype = array_key_exists('prototype', $item) ? $item['prototype'] : null;
                if ($prototype->getColor() === $color) {
                    return clone $prototype;
                }
            }
        }
        return [];
    }

    public function getItems(): array
    {
        return $this->items;
    }
}
