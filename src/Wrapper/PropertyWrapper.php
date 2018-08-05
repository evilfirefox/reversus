<?php

namespace Reversus\Wrapper;

/**
 * Class PropertyWrapper
 * @package Reversus\Wrapper
 */
class PropertyWrapper
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var PropertyModifiersWrapper
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
     * @return PropertyWrapper
     */
    public function setName(string $name): PropertyWrapper
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return PropertyModifiersWrapper
     */
    public function getModifiers(): PropertyModifiersWrapper
    {
        return $this->modifiers;
    }

    /**
     * @param PropertyModifiersWrapper $modifiers
     * @return PropertyWrapper
     */
    public function setModifiers(PropertyModifiersWrapper $modifiers): PropertyWrapper
    {
        $this->modifiers = $modifiers;
        return $this;
    }
}
