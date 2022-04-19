<?php

namespace App\Repository;

use App\Person;
use App\Skill\ElectrodanceSkill;
use App\Skill\HipHopSkill;
use App\Skill\HouseSkill;
use App\Skill\PopSkill;
use App\Skill\RnbSkill;

class PersonRepository
{
    /**
     * @param int $count
     * @return Person[]
     */
    public function getList(int $count): array
    {
        $result = [];

        for ($id = 1; $id <= $count; $id++) {
            $result[] = new Person($id, $this->getRandomSkillSet());
        }

        return $result;
    }

    /**
     * @return array
     */
    private function getRandomSkillSet(): array
    {
        $skills = [new ElectrodanceSkill, new HouseSkill, new RnbSkill, new HipHopSkill, new PopSkill];
        $randNum = rand(2, count($skills));
        $randKeys = array_rand($skills, $randNum);
        $skillSet = [];

        foreach ($randKeys as $key) {
            $skillSet[] = $skills[$key];
        }

        return $skillSet;
    }
}