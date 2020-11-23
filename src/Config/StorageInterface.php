<?php

declare(strict_types=1);

namespace Sicet7\Faro\Config;

interface StorageInterface
{
    /**
     * @return string|null
     */
    public function read(): ?string;
}