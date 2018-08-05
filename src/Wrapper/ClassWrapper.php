<?php

namespace Reversus\Wrapper;

/**
 * Class ClassWrapper
 * @package Reversus\Wrapper
 */
class ClassWrapper
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $fullyQualifiedName;

    /**
     * @var ClassModifiersWrapper
     */
    private $modifiers;

    /**
     * @var PropertyWrapper[]
     */
    private $properties;

    /**
     * @var MethodWrapper[]
     */
    private $methods;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ClassWrapper
     */
    public function setName(string $name): ClassWrapper
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getFullyQualifiedName(): string
    {
        return $this->fullyQualifiedName;
    }

    /**
     * @param string $fullyQualifiedName
     * @return ClassWrapper
     */
    public function setFullyQualifiedName(string $fullyQualifiedName): ClassWrapper
    {
        $this->fullyQualifiedName = $fullyQualifiedName;
        return $this;
    }

    /**
     * @return ClassModifiersWrapper
     */
    public function getModifiers(): ClassModifiersWrapper
    {
        return $this->modifiers;
    }

    /**
     * @param ClassModifiersWrapper $modifiers
     * @return ClassWrapper
     */
    public function setModifiers(ClassModifiersWrapper $modifiers): ClassWrapper
    {
        $this->modifiers = $modifiers;
        return $this;
    }

    /**
     * @return PropertyWrapper[]
     */
    public function getProperties(): array
    {
        return $this->properties;
    }

    /**
     * @param PropertyWrapper[] $properties
     * @return ClassWrapper
     */
    public function setProperties(array $properties): ClassWrapper
    {
        $this->properties = $properties;
        return $this;
    }

    /**
     * @return MethodWrapper[]
     */
    public function getMethods(): array
    {
        return $this->methods;
    }

    /**
     * @param MethodWrapper[] $methods
     * @return ClassWrapper
     */
    public function setMethods(array $methods): ClassWrapper
    {
        $this->methods = $methods;
        return $this;
    }
}
