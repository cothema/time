<?php

namespace Cothema\Time\Model;

/**
 * @author Milos Havlicek <miloshavlicek@gmail.com>
 */
class Collection extends \Nette\Object {

    private $items = [];

    public function addItem($item) {
        $this->items[] = $item;
    }
    
    public function getItems() {
        return $this->items;
    }

}
