<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\SalariesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=SalariesRepository::class)
 */
class Salaries
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $salary;

    /**
     * @ORM\Column(type="date")
     */
    private $fromdate;

    /**
     * @ORM\Column(type="date")
     */
    private $todate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSalary(): ?int
    {
        return $this->salary;
    }

    public function setSalary(int $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    public function getFromdate(): ?\DateTimeInterface
    {
        return $this->fromdate;
    }

    public function setFromdate(\DateTimeInterface $fromdate): self
    {
        $this->fromdate = $fromdate;

        return $this;
    }

    public function getTodate(): ?\DateTimeInterface
    {
        return $this->todate;
    }

    public function setTodate(\DateTimeInterface $todate): self
    {
        $this->todate = $todate;

        return $this;
    }
}
