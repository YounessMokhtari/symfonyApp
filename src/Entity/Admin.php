<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\AdminRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Utilisateur;
#[ORM\Entity(repositoryClass: AdminRepository::class)]
#[ApiResource]
class Admin extends Utilisateur 
{
}
