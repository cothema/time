<?php

namespace Cothema\Time\Test\Filter\Time;

use Cothema\Time\Filter\Time\Def as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Def extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('00:00', (string) new Tested('00:00'));
        Assert::same('15:00', (string) new Tested('15:00'));
        Assert::same('24:00', (string) new Tested('24:00'));
        Assert::same(TRUE, (new Tested(TRUE))->getOutput());
        Assert::same(FALSE, (new Tested(FALSE))->getOutput());
    }

}

(new Def)->run();
