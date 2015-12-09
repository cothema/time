<?php

namespace Cothema\Time\Test\Filter\Time;

use Cothema\Time\Validator\Boolean as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Boolean extends \Tester\TestCase {

    public function testCase1() {
        $trueCases = [TRUE, FALSE];
        $exceptionCases = ['15:00', 'test'];

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

(new Boolean)->run();
