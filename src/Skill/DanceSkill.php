<?php

namespace App\Skill;

use App\MusicStyle;

interface DanceSkill
{
    /**
     * @param MusicStyle $musicStyle
     * @return bool
     */
    public function dance(MusicStyle $musicStyle): bool;
}