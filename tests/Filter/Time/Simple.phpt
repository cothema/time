<?php

namespace Cothema\Time\Test\Filter\Time;

use Cothema\Time\Filter\Time\Simple as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Simple extends \Tester\TestCase
{

    public function testCase1()
    {
        Assert::same('19', (string)new Tested('19:00'));
        Assert::same('19', (new Tested('19:00'))->getOutput());
        Assert::same('19:30', (string)(new Tested('19:30')));
    }

}

(new Simple)->run();
