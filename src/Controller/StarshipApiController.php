<?php 
namespace App\Controller;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Model\Starship;
use App\Repository\StarshipRepository;

#[Route('/api/starships')]
class StarshipApiController extends AbstractController{
    #[Route('', methods: ['GET'])]
    public function getCollection( StarshipRepository $repository) : Response{
        $starships = $repository->findAll();
        return $this->json($starships);
    }

    #[Route('/{id<\d+>}', methods: ['GET'])]
    public function get(int $id, StarshipRepository $repository) : Response
    {
        $starships = $repository->find($id);

        if (!$starships){
            throw $this->createNotFoundException("Ship non trouvé");
        }
        return $this->json($starships);
    }

}