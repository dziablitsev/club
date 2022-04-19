<?php

use App\Party;
use App\Repository\PersonRepository;
use App\Repository\TrackRepository;

require 'vendor/autoload.php';

class Club
{
    /**
     * @var PersonRepository
     */
    private PersonRepository $personRepository;

    /**
     * @var TrackRepository
     */
    private TrackRepository $trackRepository;

    /**
     * @param PersonRepository $personRepository
     * @param TrackRepository $trackRepository
     */
    public function __construct(PersonRepository $personRepository, TrackRepository $trackRepository)
    {
        $this->personRepository = $personRepository;
        $this->trackRepository = $trackRepository;
    }

    /**
     * @param $personNum
     * @param $trackNum
     * @return void
     */
    public function createParty($personNum, $trackNum): void
    {
        try {
            $party = new Party(
                $this->personRepository->getList($personNum),
                $this->trackRepository->getList($trackNum)
            );
            $currentTrack = $party->getCurrentTrack();
            $currentTrack->showInfo();

            foreach ($party->getPersons() as $person) {
                $person->dance($currentTrack);
            }
        } catch (Exception $exception) {
            echo $exception->getMessage() . PHP_EOL;
        }
    }
}

$club = new Club(new PersonRepository, new TrackRepository);
$club->createParty(10, 10);