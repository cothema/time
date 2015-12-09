<?php

namespace Cothema\Time\Model\Range;

/**
 * @author Milos Havlicek <miloshavlicek@gmail.com>
 */
class Day extends \Nette\Object implements \Cothema\Time\Model\I\Range {

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
