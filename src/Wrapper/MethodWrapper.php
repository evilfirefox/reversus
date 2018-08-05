<?php

namespace Reversus\Wrapper;

/**
 * Class MethodWrapper
 * @package Reversus\Wrapper
 */
class MethodWrapper
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var MethodModifiersWrapper
     */
    private $modifiers;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return MethodWrapper
     */
    public function setName(string $name): MethodWrapper
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return MethodModifiersWrapper
     */
    public function getModifiers(): MethodModifiersWrapper
    {
        return $this->modifiers;
    }

    /**
     * @param MethodModifiersWrapper $modifiers
     * @return MethodWrapper
     */
    public function setModifiers(MethodModifiersWrapper $modifiers): MethodWrapper
    {
        $this->modifiers = $modifiers;
        return $this;
    }
}
