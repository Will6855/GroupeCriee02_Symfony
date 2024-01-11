<?php

namespace App\Entity;

use App\Repository\PecheRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PecheRepository::class)]
class Peche
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datePeche = null;

    #[ORM\Column]
    private ?int $idbateau = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdbateau(): ?int
    {
        return $this->idbateau;
    }

    public function setIdbateau(int $idbateau): static
    {
        $this->idbateau = $idbateau;

        return $this;
    }
}
