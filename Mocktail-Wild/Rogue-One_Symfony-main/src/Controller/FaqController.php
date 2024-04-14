<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\FaqRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FaqController extends AbstractController
{
    #[Route('/faq', name: 'app_faq')]
    public function index(FaqRepository $faqRepository): Response
    {
        $faq = $faqRepository->findAll();
        return $this->render(
            'faq/index.html.twig',
            [
                'pageName' => "Foire Aux Questions",
                'pageDescription' => "faq",
                'banner' => "faq",
                'faq' => $faq,
            ]
        );
    }
}
