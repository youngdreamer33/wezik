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


    public function userToJSONAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findAll();
        $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
        $userJSON = $serializer->serialize($user, 'json');
        file_put_contents('user.json', $userJSON);
        $response = new \Symfony\Component\HttpFoundation\Response(json_encode($userJSON));
        return $response;
    }

    public function morceauToJSONAction()
    {
        $em = $this->getDoctrine()->getManager();
        $morceau = $em->getRepository(Morceau::class)->findAll();
        $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
        $morceauJSON = $serializer->serialize($morceau, 'json');
        file_put_contents('morceau.json', $morceauJSON);
        $response = new \Symfony\Component\HttpFoundation\Response(json_encode($morceauJSON));
        return $response;
    }

    public function playlistToJSONAction()
    {
        $em = $this->getDoctrine()->getManager();
        $playlist = $em->getRepository(Playlist::class)->findAll();
        $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
        $playlistJSON = $serializer->serialize($playlist, 'json');
        file_put_contents('playlist.json', $playlistJSON);
        $response = new \Symfony\Component\HttpFoundation\Response(json_encode($playlistJSON));
        return $response;
    }

    public function tagToJSONAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tag = $em->getRepository(Tag::class)->findAll();
        $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
        $tagJSON = $serializer->serialize($tag, 'json');
        file_put_contents('tag.json', $tagJSON);
        $response = new \Symfony\Component\HttpFoundation\Response(json_encode($tagJSON));
        return $response;
    }

    public function addToPlaylistAction()
    {
        return 0;
    }

    public function retireFromPlaylistAction()
    {
        return 0;
    }

    public function playJSONAction(Morceau $morceau, Playlist $playlist=null)
    {
        return 0;
    }

    public function showUserAction()
    {
        return 0;
    }

    public function showTagAction()
    {
        return 0;
    }
}