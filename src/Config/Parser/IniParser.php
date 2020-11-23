<?php

declare(strict_types=1);

namespace Sicet7\Faro\Config\Parser;

use Sicet7\Faro\Config\ParserInterface;

class IniParser implements ParserInterface
{
    /**
     * @var bool
     */
    private bool $sections;

    /**
     * @var int
     */
    private int $scannerMode;

    /**
     * IniParser constructor.
     * @param bool $sections
     * @param int $scannerMode
     */
    public function __construct(bool $sections, int $scannerMode = INI_SCANNER_NORMAL)
    {
        $this->sections = $sections;
        $this->scannerMode = $scannerMode;
    }

    /**
     * @param string $content
     * @return array|null
     */
    public function fromString(string $content): ?array
    {
        $content = parse_ini_string($content, $this->sections, $this->scannerMode);
        if ($content) {
            return $content;
        }
        return null;
    }
}