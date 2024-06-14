<?php

namespace App\Entity;

use App\Repository\DestinationsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DestinationsRepository::class)]
class Destinations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom_de_la_destination = null;

    #[ORM\Column(length: 2000)]
    private ?string $Description = null;

    #[ORM\Column(length: 255)]
    private ?string $Pays = null;

    #[ORM\Column(length: 255)]
    private ?string $Ville = null;

    #[ORM\Column(length: 2000, nullable: true)]
    private ?string $Autres_informations = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Coordones_geographiques = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $img_pays = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDeLaDestination(): ?string
    {
        return $this->Nom_de_la_destination;
    }

    public function setNomDeLaDestination(string $Nom_de_la_destination): static
    {
        $this->Nom_de_la_destination = $Nom_de_la_destination;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->Pays;
    }

    public function setPays(string $Pays): static
    {
        $this->Pays = $Pays;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): static
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getAutresInformations(): ?string
    {
        return $this->Autres_informations;
    }

    public function setAutresInformations(?string $Autres_informations): static
    {
        $this->Autres_informations = $Autres_informations;

        return $this;
    }

    public function getCoordonesGeographiques(): ?string
    {
        return $this->Coordones_geographiques;
    }

    public function setCoordonesGeographiques(?string $Coordones_geographiques): static
    {
        $this->Coordones_geographiques = $Coordones_geographiques;

        return $this;
    }

    public function getImgPays(): ?string
    {
        return $this->img_pays;
    }

    public function setImgPays(?string $img_pays): static
    {
        $this->img_pays = $img_pays;

        return $this;
    }
}
