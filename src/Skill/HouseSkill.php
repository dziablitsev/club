<?php

namespace App\Skill;

use App\MusicStyle;

class HouseSkill implements DanceSkill
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

        echo 'I am dancing house style' . PHP_EOL;
        return true;
    }
}