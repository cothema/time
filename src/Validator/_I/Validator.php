<?php

namespace Cothema\Time\Validator\I;

/**
 *
 * @author Milos Havlicek <miloshavlicek@gmail.com>
 */
interface Validator
{

    /**
     *
     * @param mixed $input
     * @throws \Exception
     * @return true
     */
    public static function validate($input);

}
