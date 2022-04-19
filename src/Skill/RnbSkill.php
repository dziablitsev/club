<?php

namespace App\Skill;

use App\MusicStyle;

class RnbSkill implements DanceSkill
{
    /**
     * @param MusicStyle $musicStyle
     * @return bool
     */
    public function dance(MusicStyle $musicStyle): bool
    {
        if ($musicStyle->getName() != MusicStyle::RNB) {
            return false;
        }

        echo 'I am dancing R&B style' . PHP_EOL;
        return true;
    }

}