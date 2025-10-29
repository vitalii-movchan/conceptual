<?php

namespace Concpetual\Composition\Concern;

use Concpetual;
use Exception;
use SplObjectStorage;

/**
 * A composite object can add or remove other components (both simple or complex) to or from its child list.
 */
trait Composite
{
    /**
     * @var SplObjectStorage
     */
    private SplObjectStorage $children;

    /**
     * @param Concpetual\Composition\Contract\Component $component
     * @return void
     * @throws Exception
     */
    public function add(Concpetual\Composition\Contract\Component $component): void
    {
        if ($this instanceof Concpetual\Composition\Contract\Composite === false) {
            throw new Exception("Invalid component");
        }

        $this->children->attach($component);
        $component->setParent($this);
    }

    /**
     * @param Concpetual\Composition\Contract\Component $component
     * @return void
     * @throws Exception
     */
    public function remove(Concpetual\Composition\Contract\Component $component): void
    {
        if ($this instanceof Concpetual\Composition\Contract\Composite === false) {
            throw new Exception("Invalid component");
        }

        $this->children->detach($component);
        $component->setParent(null);
    }

    /**
     * @return SplObjectStorage
     */
    public function getChildren(): SplObjectStorage
    {
        return $this->children;
    }
}