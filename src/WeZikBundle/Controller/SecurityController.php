<?php

namespace WeZikBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use WeZikBundle\Entity\User;
class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        // get the login error if there is one

        $authUtils = $this->get('security.authentication_utils');
        $error = $authUtils->getLastAuthenticationError();
        // last username entered by the user
        $username = $authUtils->getLastUsername();

        return $this->render('@WeZik/Security/login.html.twig', array(
            'username' => $username,
            'error' => $error,
        ));
    }

    public function infoAction()
    {
        $em = $this->getDoctrine()->getManager();
        $em->getUsername();
        return $this->renderView('@WeZik/Security/info.html.twig');//, array('user' => $user));
    }
}