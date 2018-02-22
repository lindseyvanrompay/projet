<?php

namespace ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use ProjetBundle\Form\FormCreationRecetteType;
use ProjetBundle\Entity\Recette;


class RecetteController extends Controller
{
  public function creationAction(Request $request)
  {
    $recette = new Recette();
    $ingredient = $this->getDoctrine()->getRepository("ProjetBundle:Aliments")->chercherIngredient();
    $form_creation = $this->createForm(FormCreationRecetteType::class);
    $form_creation->handleRequest($request);

    if($form_creation->isSubmitted()  && $form_creation->isValid()){
      $data = $form_creation->getData();
      var_dump($data['aliment']->getIdaliment());
    }
    return $this->render('@ProjetViews/creationRecette.html.twig',array('form_creation' => $form_creation->createView()));
  }
}
