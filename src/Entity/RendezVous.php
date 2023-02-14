<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RendezVousRepository::class)]
class RendezVous
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateRdv = null;

    #[ORM\Column(length: 50)]
    private ?string $etat = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $message = null;

    #[ORM\Column(length: 100)]
    private ?string $typeLieu = null;

    #[ORM\ManyToOne(inversedBy: 'rendezVouses')]
    private ?annonce $annonce = null;

    #[ORM\ManyToMany(targetEntity: utilisateur::class, inversedBy: 'rendezVouses')]
    private Collection $utilisateur;

    public function __construct()
    {
        $this->utilisateur = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRdv(): ?\DateTimeInterface
    {
        return $this->dateRdv;
    }

    public function setDateRdv(\DateTimeInterface $dateRdv): self
    {
        $this->dateRdv = $dateRdv;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getTypeLieu(): ?string
    {
        return $this->typeLieu;
    }

    public function setTypeLieu(string $typeLieu): self
    {
        $this->typeLieu = $typeLieu;

        return $this;
    }

    public function getAnnonce(): ?annonce
    {
        return $this->annonce;
    }

    public function setAnnonce(?annonce $annonce): self
    {
        $this->annonce = $annonce;

        return $this;
    }

    /**
     * @return Collection<int, utilisateur>
     */
    public function getUtilisateur(): Collection
    {
        return $this->utilisateur;
    }

    public function addUtilisateur(utilisateur $utilisateur): self
    {
        if (!$this->utilisateur->contains($utilisateur)) {
            $this->utilisateur->add($utilisateur);
        }

        return $this;
    }

    public function removeUtilisateur(utilisateur $utilisateur): self
    {
        $this->utilisateur->removeElement($utilisateur);

        return $this;
    }
}
