<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Enfant
 *
 * @ORM\Table(name="enfant")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EnfantRepository")
 */
class Enfant
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="cadeau1", type="string", length=255, nullable=true)
     */
    private $cadeau1;

    /**
     * @var string
     *
     * @ORM\Column(name="cadeau2", type="string", length=255, nullable=true)
     */
    private $cadeau2;

    /**
     * @var string
     *
     * @ORM\Column(name="cadeau3", type="string", length=255, nullable=true)
     */
    private $cadeau3;

    /**
     * @var string
     *
     * @ORM\Column(name="cadeau4", type="string", length=255, nullable=true)
     */
    private $cadeau4;

    /**
     * @var string
     *
     * @ORM\Column(name="cadeau5", type="string", length=255, nullable=true)
     */
    private $cadeau5;

    /**
     * @var string
     *
     * @ORM\Column(name="statutCadeau1", type="string", length=255, nullable=true)
     */
    private $statutCadeau1;

    /**
     * @var string
     *
     * @ORM\Column(name="statutCadeau2", type="string", length=255, nullable=true)
     */
    private $statutCadeau2;

    /**
     * @var string
     *
     * @ORM\Column(name="statutCadeau3", type="string", length=255, nullable=true)
     */
    private $statutCadeau3;

    /**
     * @var string
     *
     * @ORM\Column(name="statutCadeau4", type="string", length=255, nullable=true)
     */
    private $statutCadeau4;

    /**
     * @var string
     *
     * @ORM\Column(name="statutCadeau5", type="string", length=255, nullable=true)
     */
    private $statutCadeau5;

    /**
     * @var string
     *
     * @ORM\Column(name="statutLivraison", type="string", length=255, nullable=false)
     */
    private $statutLivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=1, nullable=false)
     */
    private $genre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dateCreation = new \DateTime();
        $this->statutLivraison = 'Non livré';
    }

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Enfant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Enfant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Enfant
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Enfant
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Enfant
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set cadeau1
     *
     * @param string $cadeau1
     *
     * @return Enfant
     */
    public function setCadeau1($cadeau1)
    {
        $this->cadeau1 = $cadeau1;

        return $this;
    }

    /**
     * Get cadeau1
     *
     * @return string
     */
    public function getCadeau1()
    {
        return $this->cadeau1;
    }

    /**
     * Set cadeau2
     *
     * @param string $cadeau2
     *
     * @return Enfant
     */
    public function setCadeau2($cadeau2)
    {
        $this->cadeau2 = $cadeau2;

        return $this;
    }

    /**
     * Get cadeau2
     *
     * @return string
     */
    public function getCadeau2()
    {
        return $this->cadeau2;
    }

    /**
     * Set cadeau3
     *
     * @param string $cadeau3
     *
     * @return Enfant
     */
    public function setCadeau3($cadeau3)
    {
        $this->cadeau3 = $cadeau3;

        return $this;
    }

    /**
     * Get cadeau3
     *
     * @return string
     */
    public function getCadeau3()
    {
        return $this->cadeau3;
    }

    /**
     * Set cadeau4
     *
     * @param string $cadeau4
     *
     * @return Enfant
     */
    public function setCadeau4($cadeau4)
    {
        $this->cadeau4 = $cadeau4;

        return $this;
    }

    /**
     * Get cadeau4
     *
     * @return string
     */
    public function getCadeau4()
    {
        return $this->cadeau4;
    }

    /**
     * Set cadeau5
     *
     * @param string $cadeau5
     *
     * @return Enfant
     */
    public function setCadeau5($cadeau5)
    {
        $this->cadeau5 = $cadeau5;

        return $this;
    }

    /**
     * Get cadeau5
     *
     * @return string
     */
    public function getCadeau5()
    {
        return $this->cadeau5;
    }

    /**
     * Set statutCadeau1
     *
     * @param string $statutCadeau1
     *
     * @return Enfant
     */
    public function setStatutCadeau1($statutCadeau1)
    {
        $this->statutCadeau1 = $statutCadeau1;

        return $this;
    }

    /**
     * Get statutCadeau1
     *
     * @return string
     */
    public function getStatutCadeau1()
    {
        return $this->statutCadeau1;
    }

    /**
     * Set statutCadeau2
     *
     * @param string $statutCadeau2
     *
     * @return Enfant
     */
    public function setStatutCadeau2($statutCadeau2)
    {
        $this->statutCadeau2 = $statutCadeau2;

        return $this;
    }

    /**
     * Get statutCadeau2
     *
     * @return string
     */
    public function getStatutCadeau2()
    {
        return $this->statutCadeau2;
    }

    /**
     * Set statutCadeau3
     *
     * @param string $statutCadeau3
     *
     * @return Enfant
     */
    public function setStatutCadeau3($statutCadeau3)
    {
        $this->statutCadeau3 = $statutCadeau3;

        return $this;
    }

    /**
     * Get statutCadeau3
     *
     * @return string
     */
    public function getStatutCadeau3()
    {
        return $this->statutCadeau3;
    }

    /**
     * Set statutCadeau4
     *
     * @param string $statutCadeau4
     *
     * @return Enfant
     */
    public function setStatutCadeau4($statutCadeau4)
    {
        $this->statutCadeau4 = $statutCadeau4;

        return $this;
    }

    /**
     * Get statutCadeau4
     *
     * @return string
     */
    public function getStatutCadeau4()
    {
        return $this->statutCadeau4;
    }

    /**
     * Set statutCadeau5
     *
     * @param string $statutCadeau5
     *
     * @return Enfant
     */
    public function setStatutCadeau5($statutCadeau5)
    {
        $this->statutCadeau5 = $statutCadeau5;

        return $this;
    }

    /**
     * Get statutCadeau5
     *
     * @return string
     */
    public function getStatutCadeau5()
    {
        return $this->statutCadeau5;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Enfant
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set statutLivraison
     *
     * @param string $statutLivraison
     *
     * @return Enfant
     */
    public function setStatutLivraison($statutLivraison)
    {
        $this->statutLivraison = $statutLivraison;

        return $this;
    }

    /**
     * Get statutLivraison
     *
     * @return string
     */
    public function getStatutLivraison()
    {
        return $this->statutLivraison;
    }
}
