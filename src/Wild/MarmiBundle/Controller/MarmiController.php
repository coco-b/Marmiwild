<?php

namespace Wild\MarmiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Wild\MarmiBundle\Form\PictureType;
use Wild\MarmiBundle\Form\RecetteType;
use Wild\MarmiBundle\WildMarmiBundle;
use Symfony\Component\HttpFoundation\Request;
use Wild\MarmiBundle\Entity\Recette;
use Wild\MarmiBundle\Entity\picture;

class MarmiController extends Controller
{
    /**
     * add All Recette
     */
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

        return $this->render('@WildMarmiBundle/addRecette.html.twig', array (
        'form' => $form->createView(),
        ));

    }



    /**
     * Listing All Recette
     * @return Response
     */
    public function listAllRecetteAction(){
        $em = $this->getDoctrine()->getManager();

        $listRecette = $em->getRepository(\WildMarmiBundle\Entity\RecetteType::class)->findAll();

        return $this->render('@WildManyBundle/listRecette.html.twig', array(
            'listRecette' => $listRecette,
        ));
    }

    /**
     * delete Recette
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $recette = $em->getRepository('WildMarmiBundle/Recette')->findOneById($id);
        $em->remove($recette);
        $em->flush();

        return $this->redirectToRoute('wild_recette_add');
    }

    public function editRecetteAction(Request $request)
    {

            $em = $this->getDoctrine()->getManager();
            $idRecette = $request->request->get('idRecette');
            $recette = $em->getRepository(RecetteType::class)->findOneById($idRecette);
            $form = $this->generateRecetteForm($recette);
            $form->handleRequest($request);

            return $this->render('@WildMarmiBundle/editRecette.html.twig', array(
                'recette' => $recette,
                'form' => $form->createView()
            ));

    }


    public function valideEditAction(Recette $recette, Request $request)
    {
        $form = $this->generateRecetteForm($recette);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $em->persist($recette);
        $em->flush();

        return $this->redirectToRoute('wild_recette_add');
    }



}
