<?php

namespace App\Entity;

use App\Repository\ContratRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: ContratRepository::class)]
class Contrat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateContart = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Positive]
    #[Assert\Length(
        min: 1,
        max: 4,
        minMessage: 'durée de contrat doit être au moins  {{ limit }} characteres ',
        maxMessage: 'durée de contrat doit pas depasser {{ limit }} characteres',
    )]
    private ?float $dureeContart = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 3,
        max: 60,
        minMessage: 'image doit être au moins  {{ limit }} characteres ',
        maxMessage: 'image ne doit pas depasser {{ limit }} characteres',
    )]
    private ?string $image = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Positive]
    #[Assert\Length(
        min: 1,
        max: 4,
        minMessage: 'taux de profite doit être au moins  {{ limit }} characteres ',
        maxMessage: 'taux de profite doit pas depasser {{ limit }} characteres',
    )]
    private ?float $tauxProfit = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
   
    private ?RendezVous $RendezVous = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateContart(): ?\DateTimeInterface
    {
        return $this->dateContart;
    }

    public function setDateContart(\DateTimeInterface $dateContart): self
    {
        $this->dateContart = $dateContart;

        return $this;
    }

    public function getDureeContart(): ?float
    {
        return $this->dureeContart;
    }

    public function setDureeContart(float $dureeContart): self
    {
        $this->dureeContart = $dureeContart;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getTauxProfit(): ?float
    {
        return $this->tauxProfit;
    }

    public function setTauxProfit(float $tauxProfit): self
    {
        $this->tauxProfit = $tauxProfit;

        return $this;
    }

    public function getRendezVous(): ?RendezVous
    {
        return $this->RendezVous;
    }

    public function setRendezVous(?rendezVous $RendezVous): self
    {
        $this->RendezVous = $RendezVous;

        return $this;
    }
}
