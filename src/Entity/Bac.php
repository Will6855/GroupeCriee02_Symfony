<?php

namespace App\Entity;

use App\Repository\BacRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BacRepository::class)]
class Bac
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idbateau = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datePeche = null;

    #[ORM\Column]
    private ?int $idLot = null;

    #[ORM\Column]
    private ?int $idBac = null;

    #[ORM\Column]
    private ?int $idTypeBac = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdbateau(): ?int
    {
        return $this->idbateau;
    }

    public function setIdbateu(int $idbateau): static
    {
        $this->idbateau = $idbateau;

        return $this;
    }

    public function getDatePeche(): ?\DateTimeInterface
    {
        return $this->datePeche;
    }

    public function setDatePeche(\DateTimeInterface $datePeche): static
    {
        $this->datePeche = $datePeche;

        return $this;
    }

    public function getIdLot(): ?int
    {
        return $this->idLot;
    }

    public function setIdLot(int $idLot): static
    {
        $this->idLot = $idLot;

        return $this;
    }

    public function getIdBac(): ?int
    {
        return $this->idBac;
    }

    public function setIdBac(int $idBac): static
    {
        $this->idBac = $idBac;

        return $this;
    }

    public function getIdTypeBac(): ?int
    {
        return $this->idTypeBac;
    }

    public function setIdTypeBac(int $idTypeBac): static
    {
        $this->idTypeBac = $idTypeBac;

        return $this;
    }
}
