<?php

namespace Cothema\Time\Filter\Time;

class Simple extends \Cothema\Time\Filter\A\Filter implements \Cothema\Time\Filter\I\Filter {

    protected function apply() {
        if(is_bool($this->input)) {
            $this->output = $this->input;
            return;
        }
        $this->output = str_replace(':00', '', $this->input);
    }

}
