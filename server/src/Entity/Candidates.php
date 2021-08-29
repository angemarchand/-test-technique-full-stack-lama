<?php

namespace App\Entity;

use App\Repository\CandidatesRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CandidatesRepository::class)
 * 
 * @ApiResource()
 */
class Candidates
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="boolean")
     */
    private $in_search;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $profile_image;

    /**
     * @ORM\Column(type="datetime")
     */
    private $birthday;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $level_study;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $formation;

    /**
     * @ORM\Column(type="integer")
     */
    private $professional_exp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $soft_skills;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $linkedIn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $search_zone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getProfileImage(): ?string
    {
        return $this->profile_image;
    }

    public function setProfileImage(string $profile_image): self
    {
        $this->profile_image = $profile_image;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getLevelStudy(): ?string
    {
        return $this->level_study;
    }

    public function setLevelStudy(string $level_study): self
    {
        $this->level_study = $level_study;

        return $this;
    }

    public function getFormation(): ?string
    {
        return $this->formation;
    }

    public function setFormation(string $formation): self
    {
        $this->formation = $formation;

        return $this;
    }

    public function getProfessionalExp(): ?int
    {
        return $this->professional_exp;
    }

    public function setProfessionalExp(int $professional_exp): self
    {
        $this->professional_exp = $professional_exp;

        return $this;
    }

    public function getSoftSkills(): ?string
    {
        return $this->soft_skills;
    }

    public function setSoftSkills(string $soft_skills): self
    {
        $this->soft_skills = $soft_skills;

        return $this;
    }

    public function getLinkedIn(): ?string
    {
        return $this->linkedIn;
    }

    public function setLinkedIn(string $linkedIn): self
    {
        $this->linkedIn = $linkedIn;

        return $this;
    }

    public function getSearchZone(): ?string
    {
        return $this->search_zone;
    }

    public function setSearchZone(string $search_zone): self
    {
        $this->search_zone = $search_zone;

        return $this;
    }
}
