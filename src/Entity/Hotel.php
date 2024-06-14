<?php

namespace App\Entity;

use App\Repository\HotelRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HotelRepository::class)]
class Hotel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_de_hotel = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $etoiles = null;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $services_disponibles = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDeHotel(): ?string
    {
        return $this->nom_de_hotel;
    }

    public function setNomDeHotel(string $nom_de_hotel): static
    {
        $this->nom_de_hotel = $nom_de_hotel;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getEtoiles(): ?string
    {
        return $this->etoiles;
    }

    public function setEtoiles(?string $etoiles): static
    {
        $this->etoiles = $etoiles;

        return $this;
    }

    public function getServicesDisponibles(): ?string
    {
        return $this->services_disponibles;
    }

    public function setServicesDisponibles(?string $services_disponibles): static
    {
        $this->services_disponibles = $services_disponibles;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }
}
