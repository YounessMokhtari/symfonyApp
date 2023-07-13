<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\LivreurRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Utilisateur;

#[ORM\Entity(repositoryClass: LivreurRepository::class)]
#[ApiResource]
class Livreur extends Utilisateur
{
    #[ORM\Column]
    private ?bool $disponibilite = null;

    public function isDisponibilite(): ?bool
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(bool $disponibilite): static
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }
}
