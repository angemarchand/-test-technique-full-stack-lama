<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\SkillsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SkillsRepository::class)
 */
#[ApiResource]
class Skills
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sub_category;

    /**
     * @ORM\ManyToMany(targetEntity=Candidate::class, inversedBy="skills")
     */
    private $candidateRel;

    public function __construct()
    {
        $this->candidateRel = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getSubCategory(): ?string
    {
        return $this->sub_category;
    }

    public function setSubCategory(string $sub_category): self
    {
        $this->sub_category = $sub_category;

        return $this;
    }

    /**
     * @return Collection|Candidate[]
     */
    public function getCandidateRel(): Collection
    {
        return $this->candidateRel;
    }

    public function addCandidateRel(Candidate $candidateRel): self
    {
        if (!$this->candidateRel->contains($candidateRel)) {
            $this->candidateRel[] = $candidateRel;
        }

        return $this;
    }

    public function removeCandidateRel(Candidate $candidateRel): self
    {
        $this->candidateRel->removeElement($candidateRel);

        return $this;
    }
}
