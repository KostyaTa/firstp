<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FormController extends AbstractController
{
    /**
     * @Route("/form", name="form")
     */
    public function index(Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class);

        dump($form);

        $form->handleRequest($request);

        $this->addFlash('succses', 'message send');

        if ($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();

            $message = (new \Swift_Message('Hello Email'))
                ->setFrom($data['email'])
                ->setTo('kostyata@gmail.com')
                ->setBody(
                        $data['message'],
                    'text/plain'
                    );

            $mailer->send($message);
            $mailer->send($message);

            return $this->redirectToRoute("form");

            dump($data);
        }

        return $this->render('form/index.html.twig', [
            'controller_name' => 'FormController',
            'myForm' => $form->createView()
        ]);
    }
}

