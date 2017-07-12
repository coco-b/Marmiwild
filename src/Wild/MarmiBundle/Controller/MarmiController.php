<?php

namespace Wild\MarmiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Wild\MarmiBundle\Form\PictureType;
use Wild\MarmiBundle\Form\RecetteType;
use Wild\MarmiBundle\WildMarmiBundle;
use Symfony\Component\HttpFoundation\Request;
use Wild\MarmiBundle\Entity\Recette;
use Wild\MarmiBundle\Entity\picture;

class MarmiController extends Controller
{
    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $recette = new Recette();
        $form = $this->createForm(RecetteType::class, $recette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($recette);
            $em->flush();

            return $this->redirectToRoute('wild_recette_add');

        }

        return $this->render('@WildMarmiBundle/listRecette.html.twig', array (
        'form' => $form->createView(),
        ));

    }



    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $recette = $em->getRepository('WildMarmiBundle/Recette')->findOneById($id);
        $em->remove($recette);
        $em->flush();

        return $this->redirectToRoute('wild_recette_add');
    }
}
