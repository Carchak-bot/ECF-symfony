<?php

namespace App\Entity;

use App\Repository\EquipementsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipementsRepository::class)]
class Equipements
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $Tarifs = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTarifs(): ?int
    {
        return $this->Tarifs;
    }

    public function setTarifs(?int $Tarifs): static
    {
        $this->Tarifs = $Tarifs;

        return $this;
    }
}
