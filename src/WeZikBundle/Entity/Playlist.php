<?php

namespace WeZikBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Playlist
 *
 * @ORM\Table(name="playlist")
 * @ORM\Entity(repositoryClass="WeZikBundle\Repository\PlaylistRepository")
 */
class Playlist
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var bool
     *
     * @ORM\Column(name="visibilite", type="boolean")
     */
    private $visibilite;

    /**
     * @ORM\ManyToMany(targetEntity="Morceau", inversedBy="playlists", cascade={"persist"})
     */
    private $morceaux;

    /**
     * @ORM\ManyToMany(targetEntity="User", inversedBy="playlists", cascade={"persist"})
     */
    private $users;

    /**
     * @ORM\ManyToMany(targetEntity="Tag", mappedBy="playlists")
     */
    private $tags;
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Playlist
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set visibilite
     *
     * @param boolean $visibilite
     *
     * @return Playlist
     */
    public function setVisibilite($visibilite)
    {
        $this->visibilite = $visibilite;

        return $this;
    }

    /**
     * Get visibilite
     *
     * @return bool
     */
    public function getVisibilite()
    {
        return $this->visibilite;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->morceaux = new \Doctrine\Common\Collections\ArrayCollection();
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add morceaux
     *
     * @param \WeZikBundle\Entity\Morceau $morceaux
     *
     * @return Playlist
     */
    public function addMorceaux(\WeZikBundle\Entity\Morceau $morceaux)
    {
        $this->morceaux[] = $morceaux;

        return $this;
    }

    /**
     * Remove morceaux
     *
     * @param \WeZikBundle\Entity\Morceau $morceaux
     */
    public function removeMorceaux(\WeZikBundle\Entity\Morceau $morceaux)
    {
        $this->morceaux->removeElement($morceaux);
    }

    /**
     * Get morceaux
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMorceaux()
    {
        return $this->morceaux;
    }

    /**
     * Add user
     *
     * @param \WeZikBundle\Entity\User $user
     *
     * @return Playlist
     */
    public function addUser(\WeZikBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \WeZikBundle\Entity\User $user
     */
    public function removeUser(\WeZikBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add morceau
     *
     * @param \WeZikBundle\Entity\Morceau $morceau
     *
     * @return Playlist
     */
    public function addMorceau(\WeZikBundle\Entity\Morceau $morceau)
    {
        $this->morceaux[] = $morceau;
        return $this;
    }
    /**
     * Remove morceau
     *
     * @param \WeZikBundle\Entity\Morceau $morceau
     */
    public function removeMorceau(\WeZikBundle\Entity\Morceau $morceau)
    {
        $this->morceaux->removeElement($morceau);
    }

    /**
     * Add tag
     *
     * @param \WeZikBundle\Entity\Tag $tag
     *
     * @return Playlist
     */
    public function addTag(\WeZikBundle\Entity\Tag $tag)
    {
        $this->tags[] = $tag;
        return $this;
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags()
    {
        return $this->tags;
    }

}
