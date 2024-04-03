<?php 
namespace App\Controller;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Model\Starship;

class StarshipApiController extends AbstractController{
    #[Route('/api/starships')]
    public function getCollection() : Response{
        $starships = [
            new Starship(1,'lolilo1',),
        new Starship( 2,'lolilo2' ),
        new Starship(3,'lolilo3'),
        ];
        return $this->json($starships);
    }
}