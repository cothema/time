<?php

namespace Cothema\Time\Model;

/**
 * @author Milos Havlicek <miloshavlicek@gmail.com>
 */
class Range extends \Nette\Object {

    private $end;
    private $start;

    public function getEnd() {
        return $this->end;
    }

    public function getStart() {
        return $this->start;
    }

    public function setEnd($end) {
        $this->end = $end;
    }

    public function setStart($start) {
        $this->start = $start;
    }

}
