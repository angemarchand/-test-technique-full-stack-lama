<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CompaniesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompaniesRepository::class)
 */
#[ApiResource]
class Companies
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $logo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creation_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $web_site;

    /**
     * @ORM\Column(type="text")
     */
    private $presentation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email_rh;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $company_values;

    /**
     * @ORM\Column(type="integer")
     */
    private $employees_number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $job_field;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $regions;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creation_date;
    }

    public function setCreationDate(\DateTimeInterface $creation_date): self
    {
        $this->creation_date = $creation_date;

        return $this;
    }

    public function getWebSite(): ?string
    {
        return $this->web_site;
    }

    public function setWebSite(string $web_site): self
    {
        $this->web_site = $web_site;

        return $this;
    }

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(string $presentation): self
    {
        $this->presentation = $presentation;

        return $this;
    }

    public function getEmailRh(): ?string
    {
        return $this->email_rh;
    }

    public function setEmailRh(string $email_rh): self
    {
        $this->email_rh = $email_rh;

        return $this;
    }

    public function getCompanyValues(): ?string
    {
        return $this->company_values;
    }

    public function setCompanyValues(string $company_values): self
    {
        $this->company_values = $company_values;

        return $this;
    }

    public function getEmployeesNumber(): ?int
    {
        return $this->employees_number;
    }

    public function setEmployeesNumber(int $employees_number): self
    {
        $this->employees_number = $employees_number;

        return $this;
    }

    public function getJobField(): ?string
    {
        return $this->job_field;
    }

    public function setJobField(string $job_field): self
    {
        $this->job_field = $job_field;

        return $this;
    }

    public function getRegions(): ?string
    {
        return $this->regions;
    }

    public function setRegions(string $regions): self
    {
        $this->regions = $regions;

        return $this;
    }
}
