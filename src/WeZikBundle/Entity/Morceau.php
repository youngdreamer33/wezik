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
     * @ORM\ManyToMany(targetEntity="Playlist", mappedBy="morceaux", cascade={"persist"})
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
}

