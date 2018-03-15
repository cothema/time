<?php

namespace Cothema\Time\Model\Range;

use Nette\SmartObject;

/**
 * @author Milos Havlicek <miloshavlicek@gmail.com>
 */
class Day implements \Cothema\Time\Model\I\Range
{

    use SmartObject;

    /** @var string */
    private $day;

    /**
     *
     * @param mixed $day YYYY-MM-DD format
     */
    public function __construct($day)
    {
        $this->day = (string)$day;
    }

}
