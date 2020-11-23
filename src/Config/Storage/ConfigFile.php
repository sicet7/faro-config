<?php

declare(strict_types=1);

namespace Sicet7\Faro\Config\Storage;

use Sicet7\Faro\Config\StorageInterface;

class ConfigFile implements StorageInterface
{
    /**
     * @var string
     */
    private string $configFilePath;

    /**
     * @var string|null
     */
    private ?string $content = null;

    /**
     * ConfigFile constructor.
     * @param string $configFilePath
     */
    public function __construct(string $configFilePath)
    {
        $this->configFilePath = $configFilePath;
    }

    /**
     * @return string|null
     */
    public function read(): ?string
    {
        if (!empty($this->content)) {
            return $this->content;
        }
        if (!file_exists($this->configFilePath) || !is_readable($this->configFilePath)) {
            return null;
        }
        $content = file_get_contents($this->configFilePath);
        if (empty($content)) {
            return null;
        }
        $this->content = $content;
        return $this->content;
    }
}