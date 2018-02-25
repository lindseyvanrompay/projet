<?php

namespace ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use ProjetBundle\Form\FormConnexionType;
use ProjetBundle\Form\FormInscriptionType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;
use ProjetBundle\Entity\Utilisateur;

class DefaultController extends Controller
{
  public function indexAction(Request $request)
  {

    $form_connexion = $this->createForm(FormConnexionType::class);
    $form_connexion->handleRequest($request);

    if($form_connexion->isSubmitted()  && $form_connexion->isValid()){
      $data = $form_connexion->getData();
      $user= $this->getDoctrine()->getRepository("ProjetBundle:Utilisateur")->connexion($data['login'],$data['password']);
      if($user != null){
        if($this->get('session') == null){
          $session = new Session();
          $session->set('login', $data['login']);
        }
        return $this->render('ProjetBundle:Default:index.html.twig',array('form_connexion' => $form_connexion->createView()));
      } else {
        $form_connexion->get('login')->addError(new FormError('Wrong combination ?'));
      }
    }
    return $this->render('ProjetBundle:Default:index.html.twig',array('form_connexion' => $form_connexion->createView()));
  }

  public function connexionAction(Request $request)
  {
    $user = new Utilisateur();
    $form_inscription = $this->createForm(FormInscriptionType::class,$user);
    $form_inscription->handleRequest($request);

    if($form_inscription->isSubmitted()  && $form_inscription->isValid()){
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
      }
    return $this->render('@ProjetViews/inscription.html.twig',array('form_inscription' => $form_inscription->createView()));
  }

  public function testAction(Request $request){
     return $this->render('@ProjetViews/test.html.twig',array());
  }
}
