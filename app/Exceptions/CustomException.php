<?php

namespace App\Exceptions;

use Exception;

class CustomException extends Exception
{
    public static function internalError()
    {
        return new static('An Internal error occurred', 500);
    }
    public static function forbidden()
    {
        return new static('Forbidden resource', 403);
    }
    public static function unauthorized()
    {
        return new static('Unauthorized resource', 401);
    }
}