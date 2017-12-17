<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mesure
 *
 * @ORM\Table(name="mesure")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MesureRepository")
 */
class Mesure
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
     * @var float
     *
     * @ORM\Column(name="poid", type="float")
     */
    private $poid;

    /**
     * @var float
     *
     * @ORM\Column(name="pourc_muscle", type="float")
     */
    private $pourcMuscle;

    /**
     * @var float
     *
     * @ORM\Column(name="pourc_eau", type="float")
     */
    private $pourcEau;

    /**
     * @var float
     *
     * @ORM\Column(name="pourc_os", type="float")
     */
    private $pourcOs;

    /**
     * @var float
     *
     * @ORM\Column(name="pourc_gras", type="float")
     */
    private $pourcGras;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mesure", type="datetime")
     */
    private $dateMesure;


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
     * Set poid
     *
     * @param float $poid
     *
     * @return Mesure
     */
    public function setPoid($poid)
    {
        $this->poid = $poid;

        return $this;
    }

    /**
     * Get poid
     *
     * @return float
     */
    public function getPoid()
    {
        return $this->poid;
    }

    /**
     * Set pourcMuscle
     *
     * @param float $pourcMuscle
     *
     * @return Mesure
     */
    public function setPourcMuscle($pourcMuscle)
    {
        $this->pourcMuscle = $pourcMuscle;

        return $this;
    }

    /**
     * Get pourcMuscle
     *
     * @return float
     */
    public function getPourcMuscle()
    {
        return $this->pourcMuscle;
    }

    /**
     * Set pourcEau
     *
     * @param float $pourcEau
     *
     * @return Mesure
     */
    public function setPourcEau($pourcEau)
    {
        $this->pourcEau = $pourcEau;

        return $this;
    }

    /**
     * Get pourcEau
     *
     * @return float
     */
    public function getPourcEau()
    {
        return $this->pourcEau;
    }

    /**
     * Set pourcOs
     *
     * @param float $pourcOs
     *
     * @return Mesure
     */
    public function setPourcOs($pourcOs)
    {
        $this->pourcOs = $pourcOs;

        return $this;
    }

    /**
     * Get pourcOs
     *
     * @return float
     */
    public function getPourcOs()
    {
        return $this->pourcOs;
    }

    /**
     * Set pourcGras
     *
     * @param float $pourcGras
     *
     * @return Mesure
     */
    public function setPourcGras($pourcGras)
    {
        $this->pourcGras = $pourcGras;

        return $this;
    }

    /**
     * Get pourcGras
     *
     * @return float
     */
    public function getPourcGras()
    {
        return $this->pourcGras;
    }

    /**
     * Set dateMesure
     *
     * @param \DateTime $dateMesure
     *
     * @return Mesure
     */
    public function setDateMesure($dateMesure)
    {
        $this->dateMesure = $dateMesure;

        return $this;
    }

    /**
     * Get dateMesure
     *
     * @return \DateTime
     */
    public function getDateMesure()
    {
        return $this->dateMesure;
    }
}

