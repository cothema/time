<?php

namespace Cothema\Time\Model;

use Nette\SmartObject;

/**
 *
 * @property mixed $start
 * @property mixed $end
 * @author Milos Havlicek <miloshavlicek@gmail.com>
 */
class Range
{

    use SmartObject;

    private $end;
    private $start;

    public function getEnd()
    {
        return $this->end;
    }

    public function setEnd($end)
    {
        $this->end = $end;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function setStart($start)
    {
        $this->start = $start;
    }

}
