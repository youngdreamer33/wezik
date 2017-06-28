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
        var_dump($user);
        $myJSON = json_encode($user);
        return $this->render('WeZikBundle:Default:index.html.twig');
    }
}
