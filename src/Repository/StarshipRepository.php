<?php

namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;

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
            new Starship(1,'lolilo1'),
            new Starship( 2,'lolilo2' ),
            new Starship(3,'lolilo3'),
        ];
    }

}