<?php

declare(strict_types=1);

namespace Conceptual\Composition\Contract;

use Conceptual;
use SplObjectStorage;

interface Composite
{
    /**
     * @param Component $component
     * @return void
     */
    public function add(Conceptual\Composition\Contract\Component $component): void;

    /**
     * @param Component $component
     * @return void
     */
    public function remove(Conceptual\Composition\Contract\Component $component): void;

    /**
     * @return SplObjectStorage
     */
    public function getChildren(): SplObjectStorage;
}