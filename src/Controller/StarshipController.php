<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\StarshipRepository;

class StarshipController extends AbstractController
{
    #[Route('/starships/{id<\d+>}')]
    public function show (int $id, StarshipRepository $repository) : Response {

        $starships = $repository->find($id);

        if (!$starships){
            throw $this->createNotFoundException("Ship non trouvé");
        }
        return $this->render('starship/show.html.twig', [
            'ship' => $starships,
            ]);
            

    }
}