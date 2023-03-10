<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 60)]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 3,
        max: 60,
        minMessage: 'nom doit être au moins  {{ limit }} characteres ',
        maxMessage: 'nom ne doit pas depasser {{ limit }} characteres',
    )]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 3,
        max: 60,
        minMessage: 'adresse doit être au moins  {{ limit }} characteres ',
        maxMessage: 'adresse ne doit pas depasser {{ limit }} characteres',
    )]
    private ?string $adresse = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 3,
        max: 60,
        minMessage: 'photo doit être au moins  {{ limit }} characteres ',
        maxMessage: 'photo ne doit pas depasser {{ limit }} characteres',
    )]
    private ?string $photo = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Positive]
    #[Assert\Length(
        min: 1,
        max: 4,
        minMessage: 'nbrplaces doit être au moins  {{ limit }} characteres ',
        maxMessage: 'nbrplaces doit pas depasser {{ limit }} characteres',
    )]
    private ?int $nbrplaces = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 3,
        max: 60,
        minMessage: 'objet doit être au moins  {{ limit }} characteres ',
        maxMessage: 'objet ne doit pas depasser {{ limit }} characteres',
    )]
    private ?string $objet = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 3,
        max: 60,
        minMessage: 'description doit être au moins  {{ limit }} characteres ',
        maxMessage: 'description ne doit pas depasser {{ limit }} characteres',
    )]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateevent = null;

    #[ORM\OneToMany(mappedBy: 'evenements', targetEntity: Ticket::class)]
    private Collection $tickets;

    public function __construct()
    {
        $this->tickets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getNbrplaces(): ?int
    {
        return $this->nbrplaces;
    }

    public function setNbrplaces(int $nbrplaces): self
    {
        $this->nbrplaces = $nbrplaces;

        return $this;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

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

    public function getDateevent(): ?\DateTimeInterface
    {
        return $this->dateevent;
    }

    public function setDateevent(\DateTimeInterface $dateevent): self
    {
        $this->dateevent = $dateevent;

        return $this;
    }

    /**
     * @return Collection<int, Ticket>
     */
    public function getTickets(): Collection
    {
        return $this->tickets;
    }

    public function addTicket(Ticket $ticket): self
    {
        if (!$this->tickets->contains($ticket)) {
            $this->tickets->add($ticket);
            $ticket->setEvenements($this);
        }

        return $this;
    }

    public function removeTicket(Ticket $ticket): self
    {
        if ($this->tickets->removeElement($ticket)) {
            // set the owning side to null (unless already changed)
            if ($ticket->getEvenements() === $this) {
                $ticket->setEvenements(null);
            }
        }

        return $this;
    }
}
