<?php

namespace App\Exceptions;

use Exception;

class TestException extends CustomException
{
    public static function fatalError()
    {
        return new self('Oopsie App is not responding', 403);
    }
    public static function siteIsDown()
    {
        return new self('Site is down, try again later', 500);
    }
}