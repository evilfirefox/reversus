<?php

include('tests/Mocks/ClassDiagram.php');

$result = '';

$reflection = new \ReflectionClass('\Tests\Reversus\Mocks\ClassA');

$className = $reflection->getShortName();
$result .= convertClassModifiers($reflection->getModifiers()) . ' class ' . $className . PHP_EOL;

foreach ($reflection->getMethods() as $method) {
    $result .= $className . ' : ' . convertMethodModifiers($method->getModifiers()) . ' ' . $method->getShortName() . '()' . PHP_EOL;
}

function convertMethodModifiers(int $modifiers): string
{
    $result = '';

    if ($modifiers & ReflectionMethod::IS_PUBLIC) {
        $result .= ' +';
    }

    if ($modifiers & ReflectionMethod::IS_PRIVATE) {
        $result .= ' -';
    }

    if ($modifiers & ReflectionMethod::IS_PROTECTED) {
        $result .= ' #';
    }

    if ($modifiers & ReflectionMethod::IS_ABSTRACT) {
        $result .= ' {abstract}';
    }

    return $result;
}

function convertClassModifiers(int $modifiers): string
{
    $result = '';

    if ($modifiers & ReflectionClass::IS_EXPLICIT_ABSTRACT) {
        $result .= 'abstract';
    }

    if ($modifiers & ReflectionClass::IS_FINAL) {
        $result .= 'final';
    }

    return $result;
}


file_put_contents('result.puml', '@startuml' . PHP_EOL . $result . PHP_EOL . '@enduml');