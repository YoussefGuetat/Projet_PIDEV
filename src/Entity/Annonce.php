<?php

namespace App\Entity;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\AnnonceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AnnonceRepository::class)]
class Annonce
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("annonces")]
    public ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups("annonces")]
    #[Assert\NotBlank (message:"Ce champ est vide , veuillez insérer le titre")]
    public ?string $titre = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups("annonces")]
    #[Assert\NotBlank (message:"Ce champ est vide , veuillez décrir votre annonce")]
    public ?string $description = null;

    #[ORM\Column(length: 100)]
    #[Groups("annonces")]
    #[Assert\NotBlank (message:"Ce champ est vide , veuillez indiquer le domaine")]
    public ?string $domaine = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups("annonces")]
    public ?string $image = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Groups("annonces")]
    public ?\DateTimeInterface $dateCrea = null;

    #[ORM\Column(length: 60)]
    #[Groups("annonces")]
    #[Assert\NotBlank (message:"Ce champ est vide , veuillez préciser le statut")]
    public ?string $statut = null;




    #[ORM\OneToMany(mappedBy: 'annonce', targetEntity: RendezVous::class)]
    
    public Collection $rendezVouses;

    #[ORM\ManyToOne(inversedBy: 'annonces')]
    
    public ?Utilisateur $utilisateur = null;

    #[ORM\Column(nullable: true)]
    #[Groups("annonces")]
    public ?int $like_button = 0;

    #[ORM\Column(nullable: true)]
    #[Groups("annonces")]
    public ?int $dislike_button = 0;

    public function __construct()
    {
        $this->rendezVouses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDomaine(): ?string
    {
        return $this->domaine;
    }

    public function setDomaine(string $domaine): self
    {
        $this->domaine = $domaine;

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

    public function getDateCrea(): ?\DateTimeInterface
    {
        return $this->dateCrea;
    }

    public function setDateCrea(\DateTimeInterface $dateCrea): self
    {
        $this->dateCrea = $dateCrea;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * @return Collection<int, RendezVous>
     */
    public function getRendezVouses(): Collection
    {
        return $this->rendezVouses;
    }

    public function addRendezVouse(RendezVous $rendezVouse): self
    {
        if (!$this->rendezVouses->contains($rendezVouse)) {
            $this->rendezVouses->add($rendezVouse);
            $rendezVouse->setAnnonce($this);
        }

        return $this;
    }

    public function removeRendezVouse(RendezVous $rendezVouse): self
    {
        if ($this->rendezVouses->removeElement($rendezVouse)) {
            // set the owning side to null (unless already changed)
            if ($rendezVouse->getAnnonce() === $this) {
                $rendezVouse->setAnnonce(null);
            }
        }

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

    public function __toString()
    {

        return  $this->getTitre();
    }

    public function getLikeButton(): ?int
    {
        return $this->like_button;
    }

    public function setLikeButton(?int $like_button): self
    {
        $this->like_button = $like_button;

        return $this;
    }

    public function getDislikeButton(): ?int
    {
        return $this->dislike_button;
    }

    public function setDislikeButton(?int $dislike_button): self
    {
        $this->dislike_button = $dislike_button;

        return $this;
    }



    public function incrementLikes(): self
    {
        $this->like_button++;

        return $this;
    }

    public function decrementLikes(): self
    {
        $this->like_button--;

        return $this;
    }


    
}
