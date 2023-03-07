<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Post;
use App\Repository\XMenRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: XMenRepository::class)]
#[ApiResource]
class XMen
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomEntier = null;

    #[ORM\Column(length: 255)]
    private ?string $pseudo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEntier(): ?string
    {
        return $this->nomEntier;
    }

    public function setNomEntier(string $nomEntier): self
    {
        $this->nomEntier = $nomEntier;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }
}
