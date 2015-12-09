<?php

namespace Cothema\Time\Test\Filter\Time;

use Cothema\Time\Validator\WeekDayNumber as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class WeekDayNumber extends \Tester\TestCase {

    public function testCase1() {
        $trueCases = [0, 1, 2, 3, 4, 5, 6];
        $exceptionCases = [7, 10, -1, 'a', 'test'];

        foreach ($trueCases as $trueCase) {
            Assert::true(Tested::validate($trueCase));
        }

        foreach ($exceptionCases as $exceptionCase) {
            Assert::exception(function() use ($exceptionCase) {
                Tested::validate($exceptionCase);
            }, '\Exception');
        }
    }

}

(new WeekDayNumber)->run();
