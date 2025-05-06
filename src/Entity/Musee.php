<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Musee
 *
 * @ORM\Table(name="musee")
 * @ORM\Entity
 */
class Musee
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_musee", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMusee;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_musee", type="string", length=255, nullable=false)
     */
    private $nomMusee;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=false)
     */
    private $ville;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_tickets_disponibles", type="integer", nullable=false)
     */
    private $nbrTicketsDisponibles;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image_musee", type="string", length=255, nullable=false)
     */
    private $imageMusee;

    /**
     * @var float
     *
     * @ORM\Column(name="lon", type="float", precision=10, scale=0, nullable=false)
     */
    private $lon;

    /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float", precision=10, scale=0, nullable=false)
     */
    private $lat;

    public function getIdMusee(): ?int
    {
        return $this->idMusee;
    }

    public function getNomMusee(): ?string
    {
        return $this->nomMusee;
    }

    public function setNomMusee(string $nomMusee): static
    {
        $this->nomMusee = $nomMusee;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getNbrTicketsDisponibles(): ?int
    {
        return $this->nbrTicketsDisponibles;
    }

    public function setNbrTicketsDisponibles(int $nbrTicketsDisponibles): static
    {
        $this->nbrTicketsDisponibles = $nbrTicketsDisponibles;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getImageMusee(): ?string
    {
        return $this->imageMusee;
    }

    public function setImageMusee(string $imageMusee): static
    {
        $this->imageMusee = $imageMusee;

        return $this;
    }

    public function getLon(): ?float
    {
        return $this->lon;
    }

    public function setLon(float $lon): static
    {
        $this->lon = $lon;

        return $this;
    }

    public function getLat(): ?float
    {
        return $this->lat;
    }

    public function setLat(float $lat): static
    {
        $this->lat = $lat;

        return $this;
    }


}
