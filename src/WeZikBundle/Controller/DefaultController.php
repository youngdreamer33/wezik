<?php

namespace WeZikBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WeZikBundle\Entity\Morceau;
use WeZikBundle\Entity\Playlist;
use WeZikBundle\Entity\Tag;
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
        // recuperer Playlist
        $playlist = $em->getRepository(Playlist::class)->findAll();
        // recuperer Tag
        $tag = $em->getRepository(Tag::class)->findAll();

        $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
        // encodage des entités en JSON
        $userJSON = $serializer->serialize($user, 'json');
        $morceauJSON = $serializer->serialize($morceau, 'json');
        $playlistJSON = $serializer->serialize($playlist, 'json');
        $tagJSON = $serializer->serialize($tag, 'json');
        // creation des fichiers JSON
        file_put_contents('Angular/morceau.json', $morceauJSON);
        file_put_contents('Angular/user.json', $userJSON);
        file_put_contents('Angular/playlist.json', $playlistJSON);
        file_put_contents('Angular/tag.json', $tagJSON);

        return $this->render('WeZikBundle:Default:index.html.twig');
    }
}