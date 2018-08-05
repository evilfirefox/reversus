<?php

namespace Reversus\Wrapper;

/**
 * Class PropertyModifiersWrapper
 * @package Reversus\Wrapper
 */
class PropertyModifiersWrapper
{
    /**
     * @var bool
     */
    private $static;

    /**
     * @var bool
     */
    private $public;

    /**
     * @var bool
     */
    private $private;

    /**
     * @var bool
     */
    private $protected;

    /**
     * @return bool
     */
    public function isStatic(): bool
    {
        return $this->static;
    }

    /**
     * @param bool $static
     * @return PropertyModifiersWrapper
     */
    public function setStatic(bool $static): PropertyModifiersWrapper
    {
        $this->static = $static;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPublic(): bool
    {
        return $this->public;
    }

    /**
     * @param bool $public
     * @return PropertyModifiersWrapper
     */
    public function setPublic(bool $public): PropertyModifiersWrapper
    {
        $this->public = $public;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPrivate(): bool
    {
        return $this->private;
    }

    /**
     * @param bool $private
     * @return PropertyModifiersWrapper
     */
    public function setPrivate(bool $private): PropertyModifiersWrapper
    {
        $this->private = $private;
        return $this;
    }

    /**
     * @return bool
     */
    public function isProtected(): bool
    {
        return $this->protected;
    }

    /**
     * @param bool $protected
     * @return PropertyModifiersWrapper
     */
    public function setProtected(bool $protected): PropertyModifiersWrapper
    {
        $this->protected = $protected;
        return $this;
    }
}
