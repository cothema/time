<?php

namespace Cothema\Model;

/**
 * @author Milos Havlicek <miloshavlicek@gmail.com>
 */
class Day extends \Nette\Object {

    /** @var string */
    private $day;

    /**
     * 
     * @param mixed $day YYYY-MM-DD format
     */
    public function __construct($day) {
        $this->day = (string) $day;
    }
    
}
