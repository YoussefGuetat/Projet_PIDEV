<?php

namespace App\Entity;

use App\Repository\ContratRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

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
    private ?float $dureeContart = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $image = null;

    #[ORM\Column]
    private ?float $tauxProfit = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?RendezVous $rendezVous = null;

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

    public function getRendezVous(): ?rendezVous
    {
        return $this->rendezVous;
    }

    public function setRendezVous(?rendezVous $rendezVous): self
    {
        $this->rendezVous = $rendezVous;

        return $this;
    }
}
