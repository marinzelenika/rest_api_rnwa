<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TitlesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=TitlesRepository::class)
 */
class Titles
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
    private $title;

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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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
