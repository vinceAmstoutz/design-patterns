<?php

namespace App\Factory;

use App\Interface\TransportInterface;

abstract class TransportPlatform
{
    /**
     * The factory method
     *
     * @return TransportInterface
     */
    abstract public function getTransport(): TransportInterface;

    /**
     * Subclasses may add their logic directly by redirecting a connector from the factory method 
     *
     * @return void
     */
    public function deliver(): void
    {
        $transport = $this->getTransport(); //create a factory object

        //using the object
        $transport->load();
        $transport->move();
        $transport->unload();
    }
}