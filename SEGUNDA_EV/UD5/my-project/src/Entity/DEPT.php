<?php

namespace App\Entity;

use App\Repository\DeptRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DeptRepository::class)]
class Dept
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "DEPT_NO")]
    private ?int $id = null;

    #[ORM\Column(length: 14)]
    private ?string $DNOMBRE = null;

    #[ORM\Column(length: 14, nullable: true)]
    private ?string $LOC = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $COLOR = null;

    #[ORM\OneToMany(mappedBy: 'DEPT_NO', targetEntity: Emp::class, orphanRemoval: true)]
    private Collection $EMP_NO;

    public function __construct()
    {
        $this->EMP_NO = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCOLOR(): ?string
    {
        return $this->COLOR;
    }

    public function setCOLOR(?string $COLOR): static
    {
        $this->COLOR = $COLOR;

        return $this;
    }

    /**
     * @return Collection<int, Emp>
     */
    public function getEMPNO(): Collection
    {
        return $this->EMP_NO;
    }

    public function addEMPNO(Emp $eMPNO): static
    {
        if (!$this->EMP_NO->contains($eMPNO)) {
            $this->EMP_NO->add($eMPNO);
            $eMPNO->setDEPTNO($this);
        }

        return $this;
    }

    public function removeEMPNO(Emp $eMPNO): static
    {
        if ($this->EMP_NO->removeElement($eMPNO)) {
            // set the owning side to null (unless already changed)
            if ($eMPNO->getDEPTNO() === $this) {
                $eMPNO->setDEPTNO(null);
            }
        }

        return $this;
    }
}
