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

        //$user = New User();
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findAll();
        $arrayUser = (array) $user;
        var_dump((array) $user);
        $myJSON = json_encode($arrayUser);
        var_dump($myJSON);
        $decode=json_decode($myJSON);
        var_dump($decode);
        return $this->render('WeZikBundle:Default:index.html.twig');
    }
}
