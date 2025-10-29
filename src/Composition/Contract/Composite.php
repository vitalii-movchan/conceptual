<?php

declare(strict_types=1);

namespace Conceptual\Composition\Contract;

use Conceptual;
use SplObjectStorage;

interface Composite
{
    /**
     * @return SplObjectStorage
     */
    public function getChildren(): SplObjectStorage;
}