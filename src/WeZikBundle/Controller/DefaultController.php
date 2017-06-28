<?php

namespace WeZikBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WeZikBundle\Entity\Morceau;
use WeZikBundle\Entity\User;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WeZikBundle:Default:index.html.twig');
    }

    public function converToJSONAction()
    {

        $em = $this->getDoctrine()->getManager();
        // recuperer User
        $user = $em->getRepository(User::class)->findAll();
        // recuperer Morceau
        $morceau = $em->getRepository(Morceau::class)->findAll();

        $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
        // encodage des entités en JSON
        $userJSON = $serializer->serialize($user, 'json');
        $morceauJSON = $serializer->serialize($morceau, 'json');
        // creation des fichiers JSON
        file_put_contents('Angular/morceau.json', $morceauJSON);
        file_put_contents('Angular/user.json', $userJSON);

        return $this->render('WeZikBundle:Default:index.html.twig');
    }
}
