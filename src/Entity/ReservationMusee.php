<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationMusee
 *
 * @ORM\Table(name="reservation_musee", indexes={@ORM\Index(name="fk_user_reservation", columns={"id_user"}), @ORM\Index(name="fk_musee_reservation", columns={"id_musee"})})
 * @ORM\Entity
 */
class ReservationMusee
{
    /**
     * @var int
     *
     * @ORM\Column(name="reservation_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reservationId;

    /**
     * @var string
     *
     * @ORM\Column(name="date_reservation", type="string", length=255, nullable=false)
     */
    private $dateReservation;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_tickets_reserves", type="integer", nullable=false)
     */
    private $nbrTicketsReserves;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_musee", type="integer", nullable=true)
     */
    private $idMusee;

    public function getReservationId(): ?int
    {
        return $this->reservationId;
    }

    public function getDateReservation(): ?string
    {
        return $this->dateReservation;
    }

    public function setDateReservation(string $dateReservation): static
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    public function getNbrTicketsReserves(): ?int
    {
        return $this->nbrTicketsReserves;
    }

    public function setNbrTicketsReserves(int $nbrTicketsReserves): static
    {
        $this->nbrTicketsReserves = $nbrTicketsReserves;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(?int $idUser): static
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdMusee(): ?int
    {
        return $this->idMusee;
    }

    public function setIdMusee(?int $idMusee): static
    {
        $this->idMusee = $idMusee;

        return $this;
    }


}
