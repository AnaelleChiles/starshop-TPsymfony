<?php 
namespace App\Controller;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Model\Starship;
use App\Repository\StarshipRepository;

class StarshipApiController extends AbstractController{
    #[Route('/api/starships')]
    public function getCollection( StarshipRepository $repository) : Response{
        $starships = $repository->findAll();
        return $this->json($starships);
    }
}