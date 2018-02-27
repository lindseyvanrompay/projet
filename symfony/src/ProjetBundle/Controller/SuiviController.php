<?php
/**
 * Created by PhpStorm.
 * User: wargl
 * Date: 27/02/2018
 * Time: 19:20
 */

namespace ProjetBundle\Controller;

use ProjetBundle\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use ProjetBundle\Entity\Suivi;

class SuiviController extends Controller{
    public function suivreAction(Request $request){
        $user = new Utilisateur(); //TODO récupérer l'utilisateur courant à la place
        $suivi = $this->getDoctrine()->getRepository("ProjetBundle:Suivi")->suivreDieteticien($user);
        return $this->render('@ProjetViews/suivreDieteticien.html.twig',array('suivi' => $suivi));
    }

}