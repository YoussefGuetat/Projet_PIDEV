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
    private ?\DateTimeInterface $date_contrat = null;

    #[ORM\Column]
    private ?float $duree_contrat = null;

    #[ORM\Column(length: 100)]
    private ?string $image_contrat = null;

    #[ORM\Column]
    private ?float $taux_profit = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?rendezvous $rendzVous = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateContrat(): ?\DateTimeInterface
    {
        return $this->date_contrat;
    }

    public function setDateContrat(\DateTimeInterface $date_contrat): self
    {
        $this->date_contrat = $date_contrat;

        return $this;
    }

    public function getDureeContrat(): ?float
    {
        return $this->duree_contrat;
    }

    public function setDureeContrat(float $duree_contrat): self
    {
        $this->duree_contrat = $duree_contrat;

        return $this;
    }

    public function getImageContrat(): ?string
    {
        return $this->image_contrat;
    }

    public function setImageContrat(string $image_contrat): self
    {
        $this->image_contrat = $image_contrat;

        return $this;
    }

    public function getTauxProfit(): ?float
    {
        return $this->taux_profit;
    }

    public function setTauxProfit(float $taux_profit): self
    {
        $this->taux_profit = $taux_profit;

        return $this;
    }

    public function getRendzVous(): ?rendezvous
    {
        return $this->rendzVous;
    }

    public function setRendzVous(?rendezvous $rendzVous): self
    {
        $this->rendzVous = $rendzVous;

        return $this;
    }
}
