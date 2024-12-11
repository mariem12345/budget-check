<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class PricingController extends AbstractController
{
    #[Route('/pricing', name: 'pricing', methods: 'GET')]

    public function pricing(): \Symfony\Component\HttpFoundation\Response
    {
        dd('hi');
        return $this->render('pricing/index.html.twig');
    }
}