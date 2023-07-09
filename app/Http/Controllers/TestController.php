<?php

namespace App\Http\Controllers;

use App\Exceptions\TestException;
use Exception;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __invoke()
    {
        // $this->makeSomething();
        try {
            $this->makeSomething();
        } catch (TestException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], $e->getCode());
        }
        return response()->json([
            'message' => 'Hello'
        ]);
    }

    protected function makeSomething()
    {
        throw TestException::fatalError();
    }
}