<?php

namespace App;

class Track
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var MusicStyle
     */
    private MusicStyle $musicStyle;

    /**
     * @param int $id
     * @param MusicStyle $musicStyle
     */
    public function __construct(int $id, MusicStyle $musicStyle)
    {
        $this->id = $id;
        $this->musicStyle = $musicStyle;
    }

    /**
     * @return MusicStyle
     */
    public function getMusicStyle(): MusicStyle
    {
        return $this->musicStyle;
    }

    /**
     * @return void
     */
    public function showInfo(): void
    {
        echo 'Track: #' . $this->id . ' Music style: ' . $this->musicStyle->getName() . PHP_EOL;
    }
}