<?php
/**
 * Created by PhpStorm.
 * User: wargl
 * Date: 27/02/2018
 * Time: 18:12
 */

namespace ProjetBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use ProjetBundle\Entity\Abonnement;
use ProjetBundle\Entity\Utilisateur;

class AbonnementController extends Controller
{
    public function consultationAction(Request $request){
        $user = new Utilisateur(); //TODO récupérer l'utilisateur courant à la place
        $abonnement = $this->getDoctrine()->getRepository("ProjetBundle:Abonnement")->chercherAbonnement($user);
        return $this->render('@ProjetViews/consulterAbonnement.html.twig',array('abonnement' => $abonnement));
    }
}