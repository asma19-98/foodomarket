<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Employe;
// use Doctrine\ORM\EntityMangerInterface;
class EmployeController extends AbstractController
{
    /**
     * @Route("/employe", name="app_employe")
     */
    public function index(Request $request): Response
    {
        $exist = $this->getDoctrine()->getRepository(Employe::class)->findOneBy([
            'Contrat' => $request->get("Contrat"),
        ]);

        if ($exist == null)
            return $this->json("OK");
        else
            return $this->json("exist");
    }
        // $employe= new Employe;
        // $employe->getContrat();

        // $em = $this->getDoctrine()->getManager();
        // $em->persist($employe);
       
        // $em->flush();
        // $repo = $em->getRepository(Employe::class);
        // dd($repo->findAll());
        // $emp = new Employe;
        // $emp = $this->getContrat();
               // dd($emp);
        // , ['emp' => $emp]
        // return $this->render('contrats/index.html.twig');
//     }
}
