<?php

declare(strict_types=1);

namespace Concpetual\Composition\Contract;

use Concpetual;
use SplObjectStorage;

interface Composite
{
    /**
     * @return SplObjectStorage
     */
    public function getChildren(): SplObjectStorage;
}