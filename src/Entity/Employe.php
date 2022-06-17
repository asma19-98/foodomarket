<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\EmployeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmployeRepository::class)
 * @ApiResource
 */
class Employe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Contrat::class, inversedBy="employes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Contrat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cin;

    /**
     * @ORM\Column(type="boolean")
     */
    private $cnss;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $poste_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\OneToMany(targetEntity=Notif::class, mappedBy="reciver_id")
     */
    private $recivers;

    public function __construct()
    {
        $this->recivers = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContrat(): ?Contrat
    {
        return $this->Contrat;
    }

    public function setContrat(?Contrat $Contrat): self
    {
        $this->Contrat = $Contrat;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function isCnss(): ?bool
    {
        return $this->cnss;
    }

    public function setCnss(bool $cnss): self
    {
        $this->cnss = $cnss;

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

    public function getPosteId(): ?int
    {
        return $this->poste_id;
    }

    public function setPosteId(int $poste_id): self
    {
        $this->poste_id = $poste_id;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * @return Collection<int, Notif>
     */
    public function getRecivers(): Collection
    {
        return $this->recivers;
    }

    public function addReciver(Notif $reciver): self
    {
        if (!$this->recivers->contains($reciver)) {
            $this->recivers[] = $reciver;
            $reciver->setReciverId($this);
        }

        return $this;
    }

    public function removeReciver(Notif $reciver): self
    {
        if ($this->recivers->removeElement($reciver)) {
            // set the owning side to null (unless already changed)
            if ($reciver->getReciverId() === $this) {
                $reciver->setReciverId(null);
            }
        }

        return $this;
    }

    
}
