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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WeZikBundle:Default:index.html.twig');
    }


    //Convertir et récuperer les données de l'entité User sous format JSON
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

    //Convertir et récuperer les données de l'entité Morceau sous format JSON
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

    //Convertir et récuperer les données de l'entité PLaylist sous format JSON
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

    //Convertir et récuperer les données de l'entité Tag sous format JSON
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

    //Ajouter une musique à une playlist .
    //Si elle n'existe pas, la créer .
    //Génère le fichier JSON de la requête .
    public function addToPlaylistAction(Request $request)
    {
            $em = $this->getDoctrine()->getManager();
            $playlist = new Playlist();
            $jsondata = json_decode((string)$request->request);
            foreach($jsondata["morceaux"] as $morceauURL){
                $morceau = new Morceau();
                $morceau->setUrl($morceauURL);
                $morceau->setPlaylist($playlist);
                $playlist->addMorceau($morceau);
                $em->persist($morceau);
            }
            $user = $em->getRepository('WeZikBundle:User')->find($jsondata["user"]);
            $playlist->addUser($user);
            $playlist->setVisibilite($jsondata["true"]);
            foreach($jsondata["tags"] as $tagsname){
                $tag = $em->getRepository('WeZikBundle:Tag')->findOneByTag($tagsname);
                if (!$tag){
                    $tag = new Tag();
                    $tag->setName($tagsname);
                    $em->persist($tag);
                }
                $playlist->addTag($tag);
            }
            $em->persist($playlist);
            $em->flush();
            return new JsonResponse(array('error' => false));
    }

    //Retirer une musique d'une playlist .
    //Gènere un message error = false pour signaler l'execution de la requête .
    public function retireFromPlaylistAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $jsondata = json_decode($request->request);
        $playlist = $em->getRepository('WeZikBundle:Playlist')->find($jsondata["id"]);
        $em->update($playlist);
        $em->flush();
        return new JsonResponse(array('error' => false));
    }

    //Test Unitaire pour vérifier que JsonResponse renvoye bien des valeur
    public function testReturn123Action()
    {
        return new JsonResponse(array('valeur 1' => 123, 'valeur 2' => true));
    }

    //Foncion pour Jouer un Morceau
    public function playJSONAction(Morceau $morceau, Playlist $playlist=null)
    {
        return 0;
    }

    //Fonction pour Afficher le Profil d'un Utilisateur
    public function showUserAction()
    {
        return 0;
    }

    //Fonction pour afficher les Tags éxistants
    public function showTagAction()
    {
        return 0;
    }

    //Fonction pour récuperer une playlist
    //Et la renvoyer sous format JSON
    public function getPlaylistAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //$jsondata = json_decode($request->request);
        $playlist = $em->getRepository('WeZikBundle:Playlist')->findOneById('1');

        return new JsonResponse(array('Playlist' => 1, 'Error' => false));
    }

    //Fonction pour récuperer toutes les playlists
    //Et les renvoyer sous format JSON ( dans un seul fichier )
    public function getAllPlaylistsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $playlists = $em->getRepository('WeZikBundle:Playlist')->findAll();
        $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
        $playlistJSON = $serializer->serialize($playlists, 'json');
        file_put_contents('playlist.json', $playlistJSON);
        $response = new \Symfony\Component\HttpFoundation\Response(json_encode($playlistJSON));
        return $response;
    }

}