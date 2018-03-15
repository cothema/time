<?php

namespace Cothema\Time\Filter\A;

use Nette\SmartObject;

abstract class Filter
{

    use SmartObject;

    protected $input;
    protected $applied;
    protected $output;

    public function __construct($input)
    {
        $this->input = $input;
    }

    public function __toString()
    {
        return $this->getOutput();
    }

    public function getOutput()
    {
        !$this->applied && $this->apply();

        return $this->output;
    }

    protected function apply()
    {
        $this->output = $this->input;
    }

}
