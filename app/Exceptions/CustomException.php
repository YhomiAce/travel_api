<?php

namespace App\Exceptions;

use Exception;

class CustomException extends Exception
{
    public static function internalError()
    {
        return new static('An Internal error occurred', 500);
    }
}