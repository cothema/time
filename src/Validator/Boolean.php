<?php

namespace Cothema\Time\Validator;

use Nette\SmartObject;

/**
 *
 * @author Milos Havlicek <miloshavlicek@gmail.com>
 */
class Boolean implements I\Validator
{

    use SmartObject;

    /**
     *
     * @param mixed $boolean
     * @throws \Exception
     * @return true
     */
    public static function validate($boolean)
    {
        if (!is_bool($boolean)) {
            throw new \Exception('Input have to be boolean.');
        }

        return true;
    }

}
