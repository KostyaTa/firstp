<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormController extends Controller
{
    /**
     * @Route("/form", name="form")
     */
    public function index()
    {
        $form = $this->createForm(ContactType::class);

        dump($form);

        return $this->render('form/index.html.twig', [
            'controller_name' => 'FormController',
            'myForm' => $form->createView()
        ]);
    }
}
