<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotifController extends AbstractController
{
    /**
     * @Route("/notif", name="app_notif")
     */
    public function index(): Response
    {
        return $this->render('notif/index.html.twig');
    }
}
