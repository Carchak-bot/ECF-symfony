<?php

namespace App\Entity;

use App\Repository\GitesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GitesRepository::class)]
class Gites
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Adresse = null;

    #[ORM\Column]
    private ?int $Code_Postal = null;

    #[ORM\Column(length: 255)]
    private ?string $Pays = null;

    #[ORM\Column(length: 255)]
    private ?string $Surface_Habitable = null;

    #[ORM\Column]
    private ?int $Nbr_Chambres = null;

    #[ORM\Column]
    private ?int $Nbr_Couchages = null;

    #[ORM\Column(nullable: true)]
    private ?int $Tarifs_Animaux = null;

    #[ORM\Column]
    private ?int $Tarifs_Locations = null;

    #[ORM\Column]
    private ?int $Tarifs_Locations_Ete = null;

    #[ORM\Column]
    private ?int $Tarifs_Locations_Printemps = null;

    #[ORM\Column]
    private ?int $Tarifs_Locations_Automne = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): static
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->Code_Postal;
    }

    public function setCodePostal(int $Code_Postal): static
    {
        $this->Code_Postal = $Code_Postal;

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

    public function getSurfaceHabitable(): ?string
    {
        return $this->Surface_Habitable;
    }

    public function setSurfaceHabitable(string $Surface_Habitable): static
    {
        $this->Surface_Habitable = $Surface_Habitable;

        return $this;
    }

    public function getNbrChambres(): ?int
    {
        return $this->Nbr_Chambres;
    }

    public function setNbrChambres(int $Nbr_Chambres): static
    {
        $this->Nbr_Chambres = $Nbr_Chambres;

        return $this;
    }

    public function getNbrCouchages(): ?int
    {
        return $this->Nbr_Couchages;
    }

    public function setNbrCouchages(int $Nbr_Couchages): static
    {
        $this->Nbr_Couchages = $Nbr_Couchages;

        return $this;
    }

    public function getTarifsAnimaux(): ?int
    {
        return $this->Tarifs_Animaux;
    }

    public function setTarifsAnimaux(?int $Tarifs_Animaux): static
    {
        $this->Tarifs_Animaux = $Tarifs_Animaux;

        return $this;
    }

    public function getTarifsLocations(): ?int
    {
        return $this->Tarifs_Locations;
    }

    public function setTarifsLocations(int $Tarifs_Locations): static
    {
        $this->Tarifs_Locations = $Tarifs_Locations;

        return $this;
    }

    public function getTarifsLocationsEte(): ?int
    {
        return $this->Tarifs_Locations_Ete;
    }

    public function setTarifsLocationsEte(int $Tarifs_Locations_Ete): static
    {
        $this->Tarifs_Locations_Ete = $Tarifs_Locations_Ete;

        return $this;
    }

    public function getTarifsLocationsPrintemps(): ?int
    {
        return $this->Tarifs_Locations_Printemps;
    }

    public function setTarifsLocationsPrintemps(int $Tarifs_Locations_Printemps): static
    {
        $this->Tarifs_Locations_Printemps = $Tarifs_Locations_Printemps;

        return $this;
    }

    public function getTarifsLocationsAutomne(): ?int
    {
        return $this->Tarifs_Locations_Automne;
    }

    public function setTarifsLocationsAutomne(int $Tarifs_Locations_Automne): static
    {
        $this->Tarifs_Locations_Automne = $Tarifs_Locations_Automne;

        return $this;
    }
}
