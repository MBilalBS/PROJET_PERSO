<?php

namespace App\Entity;

use App\Repository\VolRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VolRepository::class)]
class Vol
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Compagnie_aerienne = null;

    #[ORM\Column(length: 255)]
    private ?string $Numero_de_vol = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date_et_heure_depart = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_et_heure_arrivee = null;

    #[ORM\Column(length: 255)]
    private ?string $prix = null;

    #[ORM\Column(length: 255)]
    private ?string $place_disponibles = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompagnieAerienne(): ?string
    {
        return $this->Compagnie_aerienne;
    }

    public function setCompagnieAerienne(string $Compagnie_aerienne): static
    {
        $this->Compagnie_aerienne = $Compagnie_aerienne;

        return $this;
    }

    public function getNumeroDeVol(): ?string
    {
        return $this->Numero_de_vol;
    }

    public function setNumeroDeVol(string $Numero_de_vol): static
    {
        $this->Numero_de_vol = $Numero_de_vol;

        return $this;
    }

    public function getDateEtHeureDepart(): ?\DateTimeInterface
    {
        return $this->Date_et_heure_depart;
    }

    public function setDateEtHeureDepart(\DateTimeInterface $Date_et_heure_depart): static
    {
        $this->Date_et_heure_depart = $Date_et_heure_depart;

        return $this;
    }

    public function getDateEtHeureArrivee(): ?\DateTimeInterface
    {
        return $this->date_et_heure_arrivee;
    }

    public function setDateEtHeureArrivee(\DateTimeInterface $date_et_heure_arrivee): static
    {
        $this->date_et_heure_arrivee = $date_et_heure_arrivee;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getPlaceDisponibles(): ?string
    {
        return $this->place_disponibles;
    }

    public function setPlaceDisponibles(string $place_disponibles): static
    {
        $this->place_disponibles = $place_disponibles;

        return $this;
    }
}
