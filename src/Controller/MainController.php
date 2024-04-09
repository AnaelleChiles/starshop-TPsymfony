<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\StarshipRepository;

class MainController extends AbstractController
{
    #[Route('/home', name: 'app_homepage')]
    public function HomePage(StarshipRepository $starshipRepository) : Response {
        $ships = $starshipRepository->findAll();
        $starshipCount = count($ships);
        $myShip = $ships[array_rand($ships)];
        return $this->render("main/homepage.html.twig", ["ships" => $ships, 'myShip' => $myShip]);
    }
}