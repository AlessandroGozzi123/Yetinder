<?php

namespace App\Entity;

use App\Repository\YetiRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: YetiRepository::class)]
class Yeti
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $Bydliste = null;

    #[ORM\Column]
    private ?int $Vek = null;

    #[ORM\Column]
    private ?int $Vyska = null;

    #[ORM\Column]
    private ?int $Hodnoceni = null;

    public function __construct()
    {
        $this->Hodnoceni = 10;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getBydliste(): ?string
    {
        return $this->Bydliste;
    }

    public function setBydliste(string $Bydliste): self
    {
        $this->Bydliste = $Bydliste;

        return $this;
    }

    public function getVek(): ?int
    {
        return $this->Vek;
    }

    public function setVek(int $Vek): self
    {
        $this->Vek = $Vek;

        return $this;
    }

    public function getVyska(): ?int
    {
        return $this->Vyska;
    }

    public function setVyska(int $Vyska): self
    {
        $this->Vyska = $Vyska;

        return $this;
    }

    public function getHodnoceni(): ?int
    {
        return $this->Hodnoceni;
    }

    public function setHodnoceni(int $Hodnoceni): self
    {
        $this->Hodnoceni = $Hodnoceni;

        return $this;
    }

    
}
