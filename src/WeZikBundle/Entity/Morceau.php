<?php

namespace WeZikBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Morceau
 *
 * @ORM\Table(name="morceau")
 * @ORM\Entity(repositoryClass="WeZikBundle\Repository\MorceauRepository")
 */
class Morceau
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
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @ORM\ManyToMany(targetEntity="Playlist", inversedBy="morceaux", cascade={"persist"})
     */
    private $playlists;

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
     * @return Morceau
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
     * Constructor
     */
    public function __construct()
    {
        $this->playlists = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Morceau
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Add playlist
     *
     * @param \WeZikBundle\Entity\Playlist $playlist
     *
     * @return Morceau
     */
    public function addPlaylist(\WeZikBundle\Entity\Playlist $playlist)
    {
        $this->playlists[] = $playlist;

        return $this;
    }

    /**
     * Remove playlist
     *
     * @param \WeZikBundle\Entity\Playlist $playlist
     */
    public function removePlaylist(\WeZikBundle\Entity\Playlist $playlist)
    {
        $this->playlists->removeElement($playlist);
    }

    /**
     * Get playlists
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlaylists()
    {
        return $this->playlists;
    }

    /**
     * Set playlist
     *
     * @param \WeZikBundle\Entity\Playlist $playlist
     *
     * @return Morceau
     */
    public function setPlaylist(\WeZikBundle\Entity\Playlist $playlist = null)
    {
        $this->playlist = $playlist;
        return $this;
    }
}
