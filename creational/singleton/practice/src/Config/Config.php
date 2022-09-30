<?php

declare(strict_types=1);

namespace App\Config;

/**
 * Singleton
 */
class Config
{
    /**
     * Special var notation for a static var only
     *
     * @var Config
     */
    private static Config $config;

    /**
     * Private constructor to create the singleton
     *
     * @param array $parameters
     */
    private function __construct(private array $parameters = [])
    {
    }

    /**
     * Get Config instance staticky (singleton)
     *
     * @param array $parameters
     * @return Config
     */
    public static function getConfig(array $parameters = []): Config
    {
        if (!isset(self::$config)) {
            self::$config = new Config($parameters);
            echo 'Config object instantiated !<br><br>';
        }
        return self::$config;
    }

    public function getParameter(string $key): ?string
    {
        if (!array_key_exists($key, $this->parameters)) {
            return null;
        }
        return $this->parameters[$key];
    }

    public function setParameter(string $key, string $value): void
    {
        $this->parameters[$key] = $value;
    }
}
