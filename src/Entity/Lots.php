<?php

namespace App\Entity;

use App\Repository\LotsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LotsRepository::class)]
class Lots
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $poidsBrutLot = null;

    #[ORM\Column]
    private ?float $prixEnchere = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateEnchere = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $heureDebutEnchere = null;

    #[ORM\Column]
    private ?float $prixPlancher = null;

    #[ORM\Column]
    private ?float $prixDepart = null;

    #[ORM\Column(length: 1)]
    private ?string $codeEtat = null;

    #[ORM\Column(nullable: true)]
    private ?int $idAssociation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPoidsBrutLot(): ?float
    {
        return $this->poidsBrutLot;
    }

    public function setPoidsBrutLot(float $poidsBrutLot): static
    {
        $this->poidsBrutLot = $poidsBrutLot;

        return $this;
    }

    public function getPrixEnchere(): ?float
    {
        return $this->prixEnchere;
    }

    public function setPrixEnchere(float $prixEnchere): static
    {
        $this->prixEnchere = $prixEnchere;

        return $this;
    }

    public function getDateEnchere(): ?\DateTimeInterface
    {
        return $this->dateEnchere;
    }

    public function setDateEnchere(\DateTimeInterface $dateEnchere): static
    {
        $this->dateEnchere = $dateEnchere;

        return $this;
    }

    public function getHeureDebutEnchere(): ?\DateTimeInterface
    {
        return $this->heureDebutEnchere;
    }

    public function setHeureDebutEnchere(\DateTimeInterface $heureDebutEnchere): static
    {
        $this->heureDebutEnchere = $heureDebutEnchere;

        return $this;
    }

    public function getPrixPlancher(): ?float
    {
        return $this->prixPlancher;
    }

    public function setPrixPlancher(float $prixPlancher): static
    {
        $this->prixPlancher = $prixPlancher;

        return $this;
    }

    public function getPrixDepart(): ?float
    {
        return $this->prixDepart;
    }

    public function setPrixDepart(float $prixDepart): static
    {
        $this->prixDepart = $prixDepart;

        return $this;
    }

    public function getCodeEtat(): ?string
    {
        return $this->codeEtat;
    }

    public function setCodeEtat(string $codeEtat): static
    {
        $this->codeEtat = $codeEtat;

        return $this;
    }

    public function getIdAssociation(): ?int
    {
        return $this->idAssociation;
    }

    public function setIdAssociation(?int $idAssociation): static
    {
        $this->idAssociation = $idAssociation;

        return $this;
    }
}
