<?php

namespace App\Entity;

use App\Repository\AcheteurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AcheteurRepository::class)]
class Acheteur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomAcheteur = null;

    #[ORM\Column(length: 255)]
    private ?string $prenomAcheteur = null;

    #[ORM\Column(length: 255)]
    private ?string $adrAcheteur = null;

    #[ORM\Column(length: 255)]
    private ?string $villeAcheteur = null;

    #[ORM\Column(length: 15)]
    private ?string $cpAcheteur = null;

    #[ORM\Column(length: 50)]
    private ?string $telAcheteur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAcheteur(): ?string
    {
        return $this->nomAcheteur;
    }

    public function setNomAcheteur(string $nomAcheteur): static
    {
        $this->nomAcheteur = $nomAcheteur;

        return $this;
    }

    public function getPrenomAcheteur(): ?string
    {
        return $this->prenomAcheteur;
    }

    public function setPrenomAcheteur(string $prenomAcheteur): static
    {
        $this->prenomAcheteur = $prenomAcheteur;

        return $this;
    }

    public function getAdrAcheteur(): ?string
    {
        return $this->adrAcheteur;
    }

    public function setAdrAcheteur(string $adrAcheteur): static
    {
        $this->adrAcheteur = $adrAcheteur;

        return $this;
    }

    public function getVilleAcheteur(): ?string
    {
        return $this->villeAcheteur;
    }

    public function setVilleAcheteur(string $villeAcheteur): static
    {
        $this->villeAcheteur = $villeAcheteur;

        return $this;
    }

    public function getCpAcheteur(): ?string
    {
        return $this->cpAcheteur;
    }

    public function setCpAcheteur(string $cpAcheteur): static
    {
        $this->cpAcheteur = $cpAcheteur;

        return $this;
    }

    public function getTelAcheteur(): ?string
    {
        return $this->telAcheteur;
    }

    public function setTelAcheteur(string $telAcheteur): static
    {
        $this->telAcheteur = $telAcheteur;

        return $this;
    }
}
