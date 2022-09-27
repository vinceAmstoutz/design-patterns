<?php

declare(strict_types=1);

namespace App\Interface;

interface PrototypeInterface
{
    public function getColor(): string;
    public function __clone(): void;
}
