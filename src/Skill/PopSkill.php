<?php

namespace App\Skill;

use App\MusicStyle;

class PopSkill implements DanceSkill
{
    /**
     * @param MusicStyle $musicStyle
     * @return bool
     */
    public function dance(MusicStyle $musicStyle): bool
    {
        if ($musicStyle->getName() != MusicStyle::POP) {
            return false;
        }

        echo 'I am dancing pop style' . PHP_EOL;
        return true;
    }
}