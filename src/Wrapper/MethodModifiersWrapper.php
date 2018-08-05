<?php

namespace Reversus\Wrapper;

/**
 * Class MethodModifiersWrapper
 * @package Reversus\Wrapper
 */
class MethodModifiersWrapper
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
     * @var bool
     */
    private $abstract;

    /**
     * @var bool
     */
    private $final;

    /**
     * @return bool
     */
    public function isStatic(): bool
    {
        return $this->static;
    }

    /**
     * @param bool $static
     * @return MethodModifiersWrapper
     */
    public function setStatic(bool $static): MethodModifiersWrapper
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
     * @return MethodModifiersWrapper
     */
    public function setPublic(bool $public): MethodModifiersWrapper
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
     * @return MethodModifiersWrapper
     */
    public function setPrivate(bool $private): MethodModifiersWrapper
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
     * @return MethodModifiersWrapper
     */
    public function setProtected(bool $protected): MethodModifiersWrapper
    {
        $this->protected = $protected;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAbstract(): bool
    {
        return $this->abstract;
    }

    /**
     * @param bool $abstract
     * @return MethodModifiersWrapper
     */
    public function setAbstract(bool $abstract): MethodModifiersWrapper
    {
        $this->abstract = $abstract;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFinal(): bool
    {
        return $this->final;
    }

    /**
     * @param bool $final
     * @return MethodModifiersWrapper
     */
    public function setFinal(bool $final): MethodModifiersWrapper
    {
        $this->final = $final;
        return $this;
    }
}
