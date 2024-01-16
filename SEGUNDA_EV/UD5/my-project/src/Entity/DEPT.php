<?php

namespace App\Entity;

use App\Repository\DEPTRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DEPTRepository::class)]
class DEPT
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $DEPT_NO = null;

    #[ORM\Column(length: 14)]
    private ?string $DNOMBRE = null;

    #[ORM\Column(length: 14, nullable: true)]
    private ?string $LOC = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $color = null;

    public function getDEPT_NO(): ?int
    {
        return $this->DEPT_NO;
    }

    public function getDNOMBRE(): ?string
    {
        return $this->DNOMBRE;
    }

    public function setDNOMBRE(string $DNOMBRE): static
    {
        $this->DNOMBRE = $DNOMBRE;

        return $this;
    }

    public function getLOC(): ?string
    {
        return $this->LOC;
    }

    public function setLOC(?string $LOC): static
    {
        $this->LOC = $LOC;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): static
    {
        $this->color = $color;

        return $this;
    }
}
