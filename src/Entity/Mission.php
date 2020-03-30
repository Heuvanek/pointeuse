<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MissionRepository")
 */
class Mission
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
    private $titleMission;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $chrono;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="missions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $clientId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleMission(): ?string
    {
        return $this->titleMission;
    }

    public function setTitleMission(string $titleMission): self
    {
        $this->titleMission = $titleMission;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getChrono(): ?\DateTimeInterface
    {
        return $this->chrono;
    }

    public function setChrono(?\DateTimeInterface $chrono): self
    {
        $this->chrono = $chrono;

        return $this;
    }

    public function getClientId(): ?Client
    {
        return $this->clientId;
    }

    public function setClientId(?Client $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }
}
