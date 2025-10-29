<?php

declare(strict_types=1);

namespace Concpetual\src\Composition\Concern;

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
     * @param \Concpetual\src\Composition\Contract\Component $component
     * @return void
     * @throws Exception
     */
    public function add(Concpetual\src\Composition\Contract\Component $component): void
    {
        if ($this instanceof Concpetual\src\Composition\Contract\Composite === false) {
            throw new Exception("Invalid component");
        }

        $this->children->attach($component);
        $component->setParent($this);
    }

    /**
     * @param \Concpetual\src\Composition\Contract\Component $component
     * @return void
     * @throws Exception
     */
    public function remove(Concpetual\src\Composition\Contract\Component $component): void
    {
        if ($this instanceof Concpetual\src\Composition\Contract\Composite === false) {
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