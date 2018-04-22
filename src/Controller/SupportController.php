<?php

namespace App\Controller;

use App\Mailer\Emailer;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SupportController extends AbstractController
{
    /**
     * @Route("/support", name="support")
     */
    public function index(Emailer $emailer)
    {


        return $this->render('support/index.html.twig', [
            'controller_name' => 'SupportController',
        ]);
    }
}
