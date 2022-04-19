<?php

namespace App;

use Exception;

class Party
{
    /**
     * @var Person[]
     */
    private array $persons;

    /**
     * @var Track[]
     */
    private array $tracks;

    /**
     * @var Track
     */
    private Track $currentTrack;

    /**
     * @param Person[] $persons
     * @param Track[] $tracks
     * @throws Exception
     */
    public function __construct(array $persons, array $tracks)
    {
        if (empty($persons)) {
            throw new Exception('Party is not possible without people');
        }
        if (empty($tracks)) {
            throw new Exception('Party is not possible without music');
        }

        $this->persons = $persons;
        $this->tracks = $tracks;
        $this->playRandomTrack();
    }

    /**
     * @return Person[]
     */
    public function getPersons(): array
    {
        return $this->persons;
    }

    /**
     * @return void
     */
    public function playRandomTrack(): void
    {
        $randNum = rand(0, count($this->tracks) - 1);
        $this->currentTrack = $this->tracks[$randNum];
    }

    /**
     * @return Track
     */
    public function getCurrentTrack(): Track
    {
        return $this->currentTrack;
    }
}