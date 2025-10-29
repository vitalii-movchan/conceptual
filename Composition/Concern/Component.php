<?php

declare(strict_types=1);

namespace Concpetual\Composition\Concern;

use Concpetual;

/**
 * Optionally, the base Component can declare an interface for setting and
 * accessing a parent of the component in a tree structure. It can also
 * provide some default implementation for these methods.
 */
trait Component
{
    /**
     * @var Concpetual\Composition\Contract\Composite|null
     */
    private Concpetual\Composition\Contract\Composite|null $parent = null;

    /**
     * @param Concpetual\Composition\Contract\Composite|null $parent
     * @return void
     */
    public function setParent(Concpetual\Composition\Contract\Composite|null $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @return Concpetual\Composition\Contract\Composite|null
     */
    public function getParent(): Concpetual\Composition\Contract\Composite|null
    {
        return $this->parent;
    }
}