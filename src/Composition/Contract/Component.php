<?php

declare(strict_types=1);

namespace Concpetual\Composition\Contract;

use Concpetual;

interface Component
{
    /**
     * @param \Concpetual\Composition\Contract\Composite|null $parent
     * @return void
     */
    public function setParent(Concpetual\Composition\Contract\Composite|null $parent): void;

    /**
     * @return \Concpetual\Composition\Contract\Composite|null
     */
    public function getParent(): Concpetual\Composition\Contract\Composite|null;
}