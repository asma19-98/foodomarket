<?php

namespace App\Controller;
use App\Repository\ContratRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Employe;

class ContractController extends AbstractController
{
  
    /**
     * @Route("/contract", name="app_contract")
     */
    public function index(ContratRepository $repo): Response
    {      
       //$emps = getEmployes();
      // , ['contrats' => $repo->findByExampleField()]
      return $this->render('contrats/index.html.twig');
    }
}
