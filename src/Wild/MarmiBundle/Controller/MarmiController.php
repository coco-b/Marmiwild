<?php

namespace Wild\MarmiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MarmiController extends Controller
{
    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $recette = new Recette();
        $form = $this->createForm(MarmiBundle\Form\recetteType::)
    }
}
