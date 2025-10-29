<?php

declare(strict_types=1);

namespace Conceptual\Composition\Contract;

use Conceptual;
use SplObjectStorage;

interface Composite
{
    /**
     * @param Conceptual\Composition\Contract\Component $component
     * @return Conceptual\Composition\Contract\Composite
     */
    public function add(Conceptual\Composition\Contract\Component $component): Conceptual\Composition\Contract\Composite;

    /**
     * @param Conceptual\Composition\Contract\Component $component
     * @return Conceptual\Composition\Contract\Composite
     */
    public function remove(Conceptual\Composition\Contract\Component $component): Conceptual\Composition\Contract\Composite;

    /**
     * @return SplObjectStorage
     */
    public function getChildren(): SplObjectStorage;
}