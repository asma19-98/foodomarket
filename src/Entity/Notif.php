<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\NotifRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=NotifRepository::class)
 */
class Notif
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=Employe::class)
     */
    private $sender_id;

    /**
     * @ORM\ManyToOne(targetEntity=Employe::class, inversedBy="recivers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reciver_id;

   

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getSenderId(): ?Employe
    {
        return $this->sender_id;
    }

    public function setSenderId(?Employe $sender_id): self
    {
        $this->sender_id = $sender_id;

        return $this;
    }

    public function getReciverId(): ?Employe
    {
        return $this->reciver_id;
    }

    public function setReciverId(?Employe $reciver_id): self
    {
        $this->reciver_id = $reciver_id;

        return $this;
    }
}
