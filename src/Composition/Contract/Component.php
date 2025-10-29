<?php

declare(strict_types=1);

namespace Concpetual\src\Composition\Contract;

use Concpetual;

interface Component
{
    /**
     * @param \Concpetual\src\Composition\Contract\Composite|null $parent
     * @return void
     */
    public function setParent(Concpetual\src\Composition\Contract\Composite|null $parent): void;

    /**
     * @return \Concpetual\src\Composition\Contract\Composite|null
     */
    public function getParent(): Concpetual\src\Composition\Contract\Composite|null;
}