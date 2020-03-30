<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *  * @Assert\Length(
     *      min = 2,
     *      max = 55,
     *      minMessage = "Le nom de la société doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Nom de société trop long, max {{ limit }} caractères"
     * )
     */
    private $society;

    /**
     * @ORM\Column(type="string", length=255)
     *  * @Assert\Length(
     *      min = 2,
     *      max = 55,
     *      minMessage = "Le prénom  doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Prénom trop long, max {{ limit }} caractères"
     * )
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     *  * @Assert\Length(
     *      min = 2,
     *      max = 55,
     *      minMessage = "Le nom de la société doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Nom de société trop long, max {{ limit }} caractères"
     * )
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     *  * @Assert\Length(
     *      min = 2,
     *      max = 55,
     *      minMessage = "L'email doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Email trop long, max {{ limit }} caractères"
     * )
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *  * @Assert\Length(
     *      min = 0,
     *      max = 12,
     *      minMessage = "Le numéro doit comporter au moins {{ limit }} chiffres",
     *      maxMessage = "Numéro trop long, max {{ limit }} chiffres"
     * )
     */
    private $phone;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Mission", mappedBy="clientId", orphanRemoval=true)
     */
    private $missions;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="clients")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userId;

    public function __construct()
    {
        $this->missions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSociety(): ?string
    {
        return $this->society;
    }

    public function setSociety(string $society): self
    {
        $this->society = $society;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

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

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return Collection|Mission[]
     */
    public function getMissions(): Collection
    {
        return $this->missions;
    }

    public function addMission(Mission $mission): self
    {
        if (!$this->missions->contains($mission)) {
            $this->missions[] = $mission;
            $mission->setClientId($this);
        }

        return $this;
    }

    public function removeMission(Mission $mission): self
    {
        if ($this->missions->contains($mission)) {
            $this->missions->removeElement($mission);
            // set the owning side to null (unless already changed)
            if ($mission->getClientId() === $this) {
                $mission->setClientId(null);
            }
        }

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(?User $userId): self
    {
        $this->userId = $userId;

        return $this;
    }
}
