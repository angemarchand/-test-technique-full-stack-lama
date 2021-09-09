<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\FormationsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormationsRepository::class)
 */
#[ApiResource]
class Formations
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $start_date;

    /**
     * @ORM\Column(type="datetime")
     */
    private $end_date;

    /**
     * @ORM\Column(type="simple_array")
     */
    private $domain_prof_category;

    /**
     * @ORM\Column(type="simple_array")
     */
    private $domain_prof_subcategory;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $entitled;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $idCandidate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(\DateTimeInterface $start_date): self
    {
        $this->start_date = $start_date;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEndDate(\DateTimeInterface $end_date): self
    {
        $this->end_date = $end_date;

        return $this;
    }

    public function getDomainProfCategory(): ?string
    {
        return $this->domain_prof_category;
    }

    public function setDomainProfCategory(string $domain_prof_category): self
    {
        $this->domain_prof_category = $domain_prof_category;

        return $this;
    }

    public function getDomainProfSubcategory(): ?string
    {
        return $this->domain_prof_subcategory;
    }

    public function setDomainProfSubcategory(string $domain_prof_subcategory): self
    {
        $this->domain_prof_subcategory = $domain_prof_subcategory;

        return $this;
    }

    public function getEntitled(): ?string
    {
        return $this->entitled;
    }

    public function setEntitled(string $entitled): self
    {
        $this->entitled = $entitled;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIdCandidate(): ?int
    {
        return $this->idCandidate;
    }

    public function setIdCandidate(int $idCandidate): self
    {
        $this->idCandidate = $idCandidate;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }
}
