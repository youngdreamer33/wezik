<?php

namespace WeZikBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WeZikBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WeZikBundle:Default:index.html.twig');
    }

    public function converToJSONAction()
    {

        //recupération de l'USER
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findAll();
        // convertir l'objet USER en tableau
        $arrayUser = (array) $user;
        var_dump((array) $user);
        // convertir l'objet en JSON
        $myJSON = json_encode($arrayUser);
        var_dump($myJSON);
        // decoder le JSON
        $decode=json_decode($myJSON);
        var_dump($decode);
        return $this->render('WeZikBundle:Default:index.html.twig');
    }
}
