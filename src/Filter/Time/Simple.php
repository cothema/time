<?php

namespace Cothema\Time\Filter\Time;

use Cothema\Time\Filter;

class Simple extends Filter\A\Filter implements Filter\I\Filter
{

    protected function apply()
    {
        if (is_bool($this->input)) {
            $this->output = $this->input;
            return;
        }
        $this->output = str_replace(':00', '', $this->input);
    }

}
