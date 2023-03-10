<?php

namespace App\Entity;

use App\Repository\TicketRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TicketRepository::class)]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $reference = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Positive]
    #[Assert\Length(
        min: 1,
        max: 4,
        minMessage: 'Nbrplace doit être au moins  {{ limit }} characteres ',
        maxMessage: 'Nbrplace doit pas depasser {{ limit }} characteres',
    )]
    private ?int $Nbrplace = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateReservation = null;

    #[ORM\ManyToOne(inversedBy: 'tickets')]
    private ?Utilisateur $utilisateur = null;

    #[ORM\ManyToOne(inversedBy: 'tickets')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
    private ?Evenement $evenements = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this; 
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->dateReservation;
    }

    public function setDateReservation(\DateTimeInterface $dateReservation): self
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    public function getUtilisateur(): ?utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getEvenements(): ?Evenement
    {
        return $this->evenements;
    }

    public function setEvenements(?Evenement $evenements): self
    {
        $this->evenements = $evenements;

        return $this;
    }
    public function getNbrplace(): ?int
    {
        return $this->Nbrplace;
    }

    public function setNbrplace(int $Nbrplace): self
    {
        $this->Nbrplace = $Nbrplace;

        return $this;
    }
}
