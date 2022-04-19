<?php

namespace App\Repository;

use App\MusicStyle;
use App\Track;

class TrackRepository
{
    /**
     * @param int $count
     * @return Track[]
     */
    public function getList(int $count): array
    {
        $result = [];

        for ($id = 1; $id <= $count; $id++) {
            $result[] = new Track($id, $this->getRandomMusicStyle());
        }

        return $result;
    }

    /**
     * @return MusicStyle
     */
    private function getRandomMusicStyle(): MusicStyle
    {
        $musicStyles = [MusicStyle::RNB, MusicStyle::ELECTROHOUSE, MusicStyle::POP];
        $randNum = rand(0, count($musicStyles) - 1);

        return new MusicStyle($musicStyles[$randNum]);
    }
}