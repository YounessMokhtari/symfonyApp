<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
#[ORM\Entity(repositoryClass: CommandeRepository::class)]
#[ApiResource]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nomCommande = null;

    #[ORM\Column(length: 50)]
    private ?string $nomPlat = null;

    #[ORM\Column]
    private ?int $nombrePlats = null;

    #[ORM\Column]
    private ?float $prixTotal = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCommande(): ?string
    {
        return $this->nomCommande;
    }

    public function setNomCommande(string $nomCommande): static
    {
        $this->nomCommande = $nomCommande;

        return $this;
    }

    public function getNomPlat(): ?string
    {
        return $this->nomPlat;
    }

    public function setNomPlat(string $nomPlat): static
    {
        $this->nomPlat = $nomPlat;

        return $this;
    }

    public function getNombrePlats(): ?int
    {
        return $this->nombrePlats;
    }

    public function setNombrePlats(int $nombrePlats): static
    {
        $this->nombrePlats = $nombrePlats;

        return $this;
    }

    public function getPrixTotal(): ?float
    {
        return $this->prixTotal;
    }

    public function setPrixTotal(float $prixTotal): static
    {
        $this->prixTotal = $prixTotal;

        return $this;
    }
}
