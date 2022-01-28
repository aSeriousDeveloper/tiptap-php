<?php

namespace Tiptap\Core;

class Extension
{
    public static $name;

    public function __construct(array $options = [])
    {
        $this->options = array_merge($this->addOptions(), $options);
    }

    public function addOptions()
    {
        return [];
    }

    public function addExtensions()
    {
        return [];
    }
}
