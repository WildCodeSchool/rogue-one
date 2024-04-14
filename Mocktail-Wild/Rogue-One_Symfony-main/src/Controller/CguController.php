<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CguController extends AbstractController
{
    #[Route('/cgu', name: 'app_cgu')]
    public function index(): Response
    {
        return $this->render('cgu/index.html.twig', [
            'pageDescription' => "CGU",
            'pageName' => "Conditions Générales d'Utilisation",
            'banner' => "cgu",
        ]);
    }
}
