<?php namespace App\Pages;

use App\Pages\PageInterface;

class StorageLocationRegistry
{
    protected $locations = [];

    function register($name, PageInterface $instance)
    {
        $this->locations[$name] = $instance;

        return $this;
    }

    function get($name)
    {
        if(isset($this->locations[$name])) {
            return $this->locations[$name];
        }

        throw new \Exception('Invalid Storage Location');
    }

    function debug()
    {
        return $this->locations;
    }
}
