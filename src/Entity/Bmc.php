<?php

namespace App\Entity;

use App\Repository\BmcRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: BmcRepository::class)]
class Bmc
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    public ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank (message:"Ce champ est vide , veuillez ajouter les cles partenaires")]
    public ?string $partenaires_cles = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank (message:"Ce champ est vide , veuillez ajouter les activités clés")]
    public ?string $activites_cles = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank (message:"Ce champ est vide , veuillez ajouter les ressources clés")]
    public ?string $ressources_cles = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank (message:"Ce champ est vide , veuillez ajouter les propositions des valeurs")]
    public ?string $proposition_valeur = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank (message:"Ce champ est vide , veuillez ajouter les relations clients")]
    public ?string $relations_client = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank (message:"Ce champ est vide , veuillez ajouter les canaux")]
    public ?string $canaux = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank (message:"Ce champ est vide , veuillez ajouter les segments du marché")]
    public ?string $segments_marche = null;

    #[ORM\Column]
    #[Assert\NotNull (message:"Ce champ est vide , veuillez ajouter un cout préferable")]
    
    public ?float $couts = null;

    #[ORM\Column]
    #[Assert\NotNull (message:"Ce champ est vide , veuillez ajouter le revenus préferable")]
    
    public ?float $revenus = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
    public ?Annonce $annonce = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPartenairesCles(): ?string
    {
        return $this->partenaires_cles;
    }

    public function setPartenairesCles(string $partenaires_cles): self
    {
        $this->partenaires_cles = $partenaires_cles;

        return $this;
    }

    public function getActivitesCles(): ?string
    {
        return $this->activites_cles;
    }

    public function setActivitesCles(string $activites_cles): self
    {
        $this->activites_cles = $activites_cles;

        return $this;
    }

    public function getRessourcesCles(): ?string
    {
        return $this->ressources_cles;
    }

    public function setRessourcesCles(string $ressources_cles): self
    {
        $this->ressources_cles = $ressources_cles;

        return $this;
    }

    public function getPropositionValeur(): ?string
    {
        return $this->proposition_valeur;
    }

    public function setPropositionValeur(string $proposition_valeur): self
    {
        $this->proposition_valeur = $proposition_valeur;

        return $this;
    }

    public function getRelationsClient(): ?string
    {
        return $this->relations_client;
    }

    public function setRelationsClient(string $relations_client): self
    {
        $this->relations_client = $relations_client;

        return $this;
    }

    public function getCanaux(): ?string
    {
        return $this->canaux;
    }

    public function setCanaux(string $canaux): self
    {
        $this->canaux = $canaux;

        return $this;
    }

    public function getSegmentsMarche(): ?string
    {
        return $this->segments_marche;
    }

    public function setSegmentsMarche(string $segments_marche): self
    {
        $this->segments_marche = $segments_marche;

        return $this;
    }

    public function getCouts(): ?float
    {
        return $this->couts;
    }

    public function setCouts(float $couts): self
    {
        $this->couts = $couts;

        return $this;
    }

    public function getRevenus(): ?float
    {
        return $this->revenus;
    }

    public function setRevenus(float $revenus): self
    {
        $this->revenus = $revenus;

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

   
    
}
