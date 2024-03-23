<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PreRegistrationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PreRegistrationRepository::class)]
#[ApiResource]
class PreRegistration
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $firstName = null;

    #[ORM\Column(length: 255)]
    private ?string $lastName = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $school = null;

    #[ORM\Column(length: 255)]
    private ?string $section = null;

    #[ORM\Column(length: 255)]
    private ?string $class = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?bool $week1 = null;

    #[ORM\Column]
    private ?bool $week2 = null;

    #[ORM\Column]
    private ?bool $week3 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getSchool(): ?string
    {
        return $this->school;
    }

    public function setSchool(string $school): static
    {
        $this->school = $school;

        return $this;
    }

    public function getSection(): ?string
    {
        return $this->section;
    }

    public function setSection(string $section): static
    {
        $this->section = $section;

        return $this;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(string $class): static
    {
        $this->class = $class;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function isWeek1(): ?bool
    {
        return $this->week1;
    }

    public function setWeek1(bool $week1): static
    {
        $this->week1 = $week1;

        return $this;
    }

    public function isWeek2(): ?bool
    {
        return $this->week2;
    }

    public function setWeek2(bool $week2): static
    {
        $this->week2 = $week2;

        return $this;
    }

    public function isWeek3(): ?bool
    {
        return $this->week3;
    }

    public function setWeek3(bool $week3): static
    {
        $this->week3 = $week3;

        return $this;
    }
}
