<?php

namespace Cothema\Time\Model;

use Nette\SmartObject;

/**
 * @property array $items
 * @author Milos Havlicek <miloshavlicek@gmail.com>
 */
class Collection
{

    use SmartObject;

    /** @var array */
    private $items = [];

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items): void
    {
        foreach ($items as $item) {
            $this->addItem($item);
        }
    }

    /**
     * @param $item
     */
    public function addItem($item): void
    {
        $this->items[] = $item;
    }

}
