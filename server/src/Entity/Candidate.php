<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CandidateRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CandidateRepository::class)
 */
#[ApiResource(
    collectionOperations: [
        "sendSkill" => [
            path
        ]
    ]
)]
class Candidate
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
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $profile_photo;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $birth_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $level_studies;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $linkedin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $search_region;

    /**
     * @ORM\ManyToMany(targetEntity=Skills::class, mappedBy="candidateRel, nullable=true")
     */
    private $skills;

    /**
     * @ORM\Column(type="boolean")
     */
    private $in_search;

    public function __construct()
    {
        $this->skills = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getProfilePhoto(): ?string
    {
        return $this->profile_photo;
    }

    public function setProfilePhoto(string $profile_photo): self
    {
        $this->profile_photo = $profile_photo;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birth_date;
    }

    public function setBirthDate(\DateTimeInterface $birth_date): self
    {
        $this->birth_date = $birth_date;

        return $this;
    }

    public function getLevelStudies(): ?string
    {
        return $this->level_studies;
    }

    public function setLevelStudies(string $level_studies): self
    {
        $this->level_studies = $level_studies;

        return $this;
    }

    public function getLinkedin(): ?string
    {
        return $this->linkedin;
    }

    public function setLinkedin(string $linkedin): self
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    public function getSearchRegion(): ?string
    {
        return $this->search_region;
    }

    public function setSearchRegion(string $search_region): self
    {
        $this->search_region = $search_region;

        return $this;
    }

    /**
     * @return Collection|Skills[]
     */
    public function getSkills(): Collection
    {
        return $this->skills;
    }

    public function addSkill(Skills $skill): self
    {
        if (!$this->skills->contains($skill)) {
            $this->skills[] = $skill;
            $skill->addCandidateRel($this);
        }

        return $this;
    }

    public function removeSkill(Skills $skill): self
    {
        if ($this->skills->removeElement($skill)) {
            $skill->removeCandidateRel($this);
        }

        return $this;
    }

    public function getInSearch(): ?bool
    {
        return $this->in_search;
    }

    public function setInSearch(bool $in_search): self
    {
        $this->in_search = $in_search;

        return $this;
    }
}
