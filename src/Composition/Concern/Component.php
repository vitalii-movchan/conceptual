<?php

declare(strict_types=1);

namespace Conceptual\Composition\Concern;

use Conceptual;

/**
 * Optionally, the base Component can declare an interface for setting and
 * accessing a parent of the component in a tree structure. It can also
 * provide some default implementation for these methods.
 */
trait Component
{
    /**
     * @var Conceptual\Composition\Contract\Composite|null
     */
    private Conceptual\Composition\Contract\Composite|null $parent = null;

    /**
     * @param Conceptual\Composition\Contract\Composite|null $parent
     * @return void
     */
    public function setParent(Conceptual\Composition\Contract\Composite|null $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @return Conceptual\Composition\Contract\Composite|null
     */
    public function getParent(): Conceptual\Composition\Contract\Composite|null
    {
        return $this->parent;
    }
}