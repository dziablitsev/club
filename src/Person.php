<?php

namespace App;

use App\Skill\DanceSkill;

class Person
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var DanceSkill[]
     */
    private array $skillSet;

    /**
     * @param int $id
     * @param DanceSkill[] $skillSet
     */
    public function __construct(int $id, array $skillSet = [])
    {
        $this->id = $id;
        $this->skillSet = $skillSet;
    }

    /**
     * @param Track $track
     * @return void
     */
    public function dance(Track $track): void
    {
        $this->showId();
        $isDancing = false;

        foreach ($this->skillSet as $skill) {
            $isDancing = $skill->dance($track->getMusicStyle());
            if ($isDancing) {
                break;
            }
        }

        if (!$isDancing) {
            $this->drink();
        }
    }

    /**
     * @return void
     */
    private function showId(): void
    {
        echo "#{$this->id} ";
    }

    /**
     * @return void
     */
    private function drink(): void
    {
        echo 'I am drinking' . PHP_EOL;
    }
}