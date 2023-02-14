<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_rec = null;

    #[ORM\Column(length: 100)]
    private ?string $sujet = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contenu = null;

    #[ORM\Column(length: 40)]
    private ?string $etat = null;

    #[ORM\ManyToOne(inversedBy: 'reclamations')]
    private ?utilisateur $utilisateur = null;

    #[ORM\ManyToOne(inversedBy: 'reclamation')]
    private ?Assistance $assistance = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRec(): ?\DateTimeInterface
    {
        return $this->date_rec;
    }

    public function setDateRec(\DateTimeInterface $date_rec): self
    {
        $this->date_rec = $date_rec;

        return $this;
    }

    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    public function setSujet(string $sujet): self
    {
        $this->sujet = $sujet;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

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

    public function getUtilisateur(): ?utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getAssistance(): ?Assistance
    {
        return $this->assistance;
    }

    public function setAssistance(?Assistance $assistance): self
    {
        $this->assistance = $assistance;

        return $this;
    }
}
