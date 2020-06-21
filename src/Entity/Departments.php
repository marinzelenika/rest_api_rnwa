<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DepartmentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DepartmentsRepository::class)
 */
class Departments
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $deptname;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeptname(): ?string
    {
        return $this->deptname;
    }

    public function setDeptname(string $deptname): self
    {
        $this->deptname = $deptname;

        return $this;
    }
}
