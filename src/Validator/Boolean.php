<?php

namespace Cothema\Time\Validator;

/**
 * 
 * @author Milos Havlicek <miloshavlicek@gmail.com>
 */
class Boolean extends \Nette\Object implements I\Validator {

    /**
     * 
     * @param mixed $boolean
     * @throws \Exception
     * @return TRUE
     */
    public static function validate($boolean) {
        if (!is_bool($boolean)) {
            throw new \Exception('Input have to be boolean.');
        }

        return TRUE;
    }

}
