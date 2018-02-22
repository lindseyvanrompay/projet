<?php

namespace ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RecetteController extends Controller
{
  public function creationAction(Request $request)
  {
    $form_creation = $this->createForm(FormCreationRecetteType::class);
    $form_creation->handleRequest($request);

  }
}
