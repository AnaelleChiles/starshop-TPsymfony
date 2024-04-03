<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;



class MainController extends AbstractController
{
    #[Route('/')]
    public function HomePage() : Response {
        $starshipCount = 457;
        $myShip = [
            "top" => "Sun",
            "bottom" => "Moon",
            'thirdWheel' => "Y/N",
            'status' => "alive",
        ];
        return $this->render("main/homepage.html.twig", ["numberOfStarships" => $starshipCount, 'myShip' => $myShip]);
    }
}
