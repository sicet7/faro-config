<?php

declare(strict_types=1);

namespace Sicet7\Faro\Config;

interface ParserInterface
{
    /**
     * @param string $content
     * @return array|null
     */
    public function fromString(string $content): ?array;
}