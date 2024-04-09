<?php

namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;
use App\Model\StarshipStatusEnum;

class StarshipRepository{
    public function __construct(private LoggerInterface $logger){

    }
    public function find(int $id): ?Starship
    {
        foreach ($this->findAll() as $starship) {
            if ($starship->getId() === $id) {
                return $starship;
            }
        }
        return null;
    }

    public function findAll() : array{
        $this->logger->info("Ceci est un super duper message");
        return [
            new Starship(1,'lolilo1', "", "",  StarshipStatusEnum::IN_PROGRESS),
            new Starship( 2,'lolilo2', "", "", StarshipStatusEnum::COMPLETED),
            new Starship(3,'lolilo3', "", "",  StarshipStatusEnum::WAITING),
        ];
    }

}