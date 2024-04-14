<?php

namespace App\Entity;

use App\Repository\FaqRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FaqRepository::class)]
class Faq
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $question = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $response = null;

    #[ORM\Column(length: 50)]
    private ?string $section = null;

    #[ORM\Column(length: 50)]
    private ?string $collapse = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): static
    {
        $this->question = $question;

        return $this;
    }

    public function getresponse(): ?string
    {
        return $this->response;
    }

    public function setresponse(string $response): static
    {
        $this->response = $response;

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
    public function getcollapse(): ?string
    {
        return $this->collapse;
    }

    public function setcollapse(string $collapse): static
    {
        $this->collapse = $collapse;

        return $this;
    }
}
