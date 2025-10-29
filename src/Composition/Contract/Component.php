<?php

declare(strict_types=1);

namespace Conceptual\Composition\Contract;

use Conceptual;

interface Component
{
    /**
     * @param Conceptual\Composition\Contract\Composite|null $parent
     * @return void
     */
    public function setParent(Conceptual\Composition\Contract\Composite|null $parent): void;

    /**
     * @return Conceptual\Composition\Contract\Composite|null
     */
    public function getParent(): Conceptual\Composition\Contract\Composite|null;
}