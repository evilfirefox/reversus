<?php

namespace Reversus\Wrapper;

/**
 * Class ClassModifiersWrapper
 * @package Reversus\Wrapper
 */
class ClassModifiersWrapper
{
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
    public function isAbstract(): bool
    {
        return $this->abstract;
    }

    /**
     * @param bool $abstract
     * @return ClassModifiersWrapper
     */
    public function setAbstract(bool $abstract): ClassModifiersWrapper
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
     * @return ClassModifiersWrapper
     */
    public function setFinal(bool $final): ClassModifiersWrapper
    {
        $this->final = $final;
        return $this;
    }
}
