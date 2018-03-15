<?php

namespace Cothema\Time\Validator;

use Nette\SmartObject;

/**
 *
 * @author Milos Havlicek <miloshavlicek@gmail.com>
 */
class WeekDayNumber implements I\Validator
{

    use SmartObject;

    /**
     *
     * @param mixed $dayNum
     * @throws \Exception
     * @return true
     */
    public static function validate($dayNum)
    {
        if (!is_int($dayNum)) {
            throw new \Exception('Input have to be integer.');
        }
        if (!($dayNum >= 0 && $dayNum <= 6)) {
            throw new \Exception('Input have to be in range <0 - 6>.');
        }

        return true;
    }

}
