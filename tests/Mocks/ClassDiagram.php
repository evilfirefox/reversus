<?php

namespace Tests\Reversus\Mocks;

interface I
{
    public function method();
}

abstract class A implements I
{
}

class B extends A
{
    public function method()
    {
    }
}