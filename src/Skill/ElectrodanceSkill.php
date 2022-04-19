<?php

namespace App\Skill;

use App\MusicStyle;

class ElectrodanceSkill implements DanceSkill
{
    /**
     * @param MusicStyle $musicStyle
     * @return bool
     */
    public function dance(MusicStyle $musicStyle): bool
    {
        if ($musicStyle->getName() != MusicStyle::ELECTROHOUSE) {
            return false;
        }

        echo 'I am dancing electrodance style' . PHP_EOL;
        return true;
    }
}