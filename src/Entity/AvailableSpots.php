<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\AvailableSpotsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvailableSpotsRepository::class)]
#[ApiResource]
class AvailableSpots
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $basicKindergarten = null;

    #[ORM\Column]
    private ?int $basicPrimary = null;

    #[ORM\Column]
    private ?int $expandedKindergarten = null;

    #[ORM\Column]
    private ?int $expandedPrimary = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBasicKindergarten(): ?int
    {
        return $this->basicKindergarten;
    }

    public function setBasicKindergarten(int $basicKindergarten): static
    {
        $this->basicKindergarten = $basicKindergarten;

        return $this;
    }

    public function getBasicPrimary(): ?int
    {
        return $this->basicPrimary;
    }

    public function setBasicPrimary(int $basicPrimary): static
    {
        $this->basicPrimary = $basicPrimary;

        return $this;
    }

    public function getExpandedKindergarten(): ?int
    {
        return $this->expandedKindergarten;
    }

    public function setExpandedKindergarten(int $expandedKindergarten): static
    {
        $this->expandedKindergarten = $expandedKindergarten;

        return $this;
    }

    public function getExpandedPrimary(): ?int
    {
        return $this->expandedPrimary;
    }

    public function setExpandedPrimary(int $expandedPrimary): static
    {
        $this->expandedPrimary = $expandedPrimary;

        return $this;
    }
}
