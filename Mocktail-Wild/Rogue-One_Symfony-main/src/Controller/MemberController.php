<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Member;
use App\Repository\MemberRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MemberController extends AbstractController
{
    #[Route('/member', name: 'app_member')]
    public function index(MemberRepository $memberRepository): Response
    {
        $member = $memberRepository->findAll();
        return $this->render('member/index.html.twig', [
            'pageName' => "Notre équipe",
            'pageDescription' => "member",
            'banner' => "member",
            'members' => $member,
        ]);
    }
}
