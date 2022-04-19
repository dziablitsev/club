<?php

namespace App;

class MusicStyle
{
    const ELECTROHOUSE = 'electrohouse';
    const RNB = 'rnb';
    const POP = 'pop';

    /**
     * @var string
     */
    private string $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}