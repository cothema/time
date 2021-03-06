<?php

namespace Cothema\Time\Filter\Time;

use Cothema\Time\Filter;

class Def extends Filter\A\Filter implements Filter\I\Filter
{

    protected function apply()
    {
        if (is_bool($this->input)) {
            $this->output = $this->input;
            return;
        }
        $input = new \DateTime($this->input);
        $processed = $input->format('H:i');
        if ($processed === '00:00') {
            $diff = $input->format('U') - (new \DateTime($processed))->format('U');

            if ($diff > 60 * 60 * 22) {
                $this->output = '24:00';
                return;
            }
        }
        $this->output = $processed;
    }

}
