<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison", indexes={@ORM\Index(name="fk_livraison_livreur", columns={"id_livreur"}), @ORM\Index(name="fk_livraison_commande", columns={"id_commande"})})
 * @ORM\Entity
 */
class Livraison
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_livraison", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="date_livraison", type="string", length=50, nullable=false)
     */
    private $dateLivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_livraison", type="string", length=50, nullable=false)
     */
    private $adresseLivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="status_livraison", type="string", length=20, nullable=false)
     */
    private $statusLivraison;

    /**
     * @var float
     *
     * @ORM\Column(name="frais_livraison", type="float", precision=10, scale=0, nullable=false)
     */
    private $fraisLivraison;

    /**
     * @var int
     *
     * @ORM\Column(name="id_commande", type="integer", nullable=false)
     */
    private $idCommande;

    /**
     * @var int
     *
     * @ORM\Column(name="id_livreur", type="integer", nullable=false)
     */
    private $idLivreur;

    public function getIdLivraison(): ?int
    {
        return $this->idLivraison;
    }

    public function getDateLivraison(): ?string
    {
        return $this->dateLivraison;
    }

    public function setDateLivraison(string $dateLivraison): static
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    public function getAdresseLivraison(): ?string
    {
        return $this->adresseLivraison;
    }

    public function setAdresseLivraison(string $adresseLivraison): static
    {
        $this->adresseLivraison = $adresseLivraison;

        return $this;
    }

    public function getStatusLivraison(): ?string
    {
        return $this->statusLivraison;
    }

    public function setStatusLivraison(string $statusLivraison): static
    {
        $this->statusLivraison = $statusLivraison;

        return $this;
    }

    public function getFraisLivraison(): ?float
    {
        return $this->fraisLivraison;
    }

    public function setFraisLivraison(float $fraisLivraison): static
    {
        $this->fraisLivraison = $fraisLivraison;

        return $this;
    }

    public function getIdLivreur(): ?Livreur
    {
        return $this->idLivreur;
    }

    public function setIdLivreur(?Livreur $idLivreur): static
    {
        $this->idLivreur = $idLivreur;

        return $this;
    }

    public function getIdCommande(): ?Commande
    {
        return $this->idCommande;
    }

    public function setIdCommande(?Commande $idCommande): static
    {
        $this->idCommande = $idCommande;

        return $this;
    }


}
