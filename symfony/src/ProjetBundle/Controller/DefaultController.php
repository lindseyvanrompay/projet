<?php

namespace ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository("ProjetBundle:Utilisateur");
        $users = $repository->findMyUser();
        return $this->render('ProjetBundle:Default:index.html.twig');
    }
}
