<?php

declare(strict_types=1);

namespace App\Interface;

/**
 * The Transport interface declare behaviors of object types
 */
interface TransportInterface
{
    /**
     * Method that implements the load action
     *
     * @return void
     */
    public function load(): void;

    /**
     * Method that implements the move action
     *
     * @return void
     */
    public function move(): void;

    /**
     * Method that implements the unload action
     * @return void
     */
    public function unload(): void;
}
