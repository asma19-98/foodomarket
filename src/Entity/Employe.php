<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\EmployeRepository;
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
}
