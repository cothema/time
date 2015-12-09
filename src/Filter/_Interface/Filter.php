<?php

namespace Cothema\Time\Filter\I;

interface Filter {

    public function __construct($input);

    public function getOutput();
}
