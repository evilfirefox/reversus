<?php

namespace Tests\Reversus\Mocks;

abstract class ClassA
{
    protected $protected;

    private $private;

    public $public;

    private function privateMethod()
    {
    }

    protected function protectedMethod()
    {
    }

    public function publicMethod()
    {
    }

    abstract public function abstractMethod();
}