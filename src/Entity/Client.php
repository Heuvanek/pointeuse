<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     *  * @Assert\Length(
     *      min = 2,
     *      max = 55,
     *      minMessage = "Le prénom doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "trop long, max {{ limit }} caractères"
     * )

     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *  * @Assert\Length(
     *      min = 2,
     *      max = 55,
     *      minMessage = "Le nom doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "trop long, max {{ limit }} caractères"
     * )

     */
    private $surname;

    /**
     * @ORM\Column(type="string", length=255)
     *  * @Assert\Length(
     *      min = 2,
     *      max = 55,
     *      minMessage = "La société doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "trop long, max {{ limit }} caractères"
     * )

     */
    private $society;

    /**
     * @ORM\Column(type="string", length=255)
     *  * @Assert\Length(
     *      min = 2,
     *      max = 55,
     *      minMessage = "L'email doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "trop long, max {{ limit }} caractères"
     * )
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *  * @Assert\Length(
     *      min = 0,
     *      max = 12,
     *      minMessage = "Le numéro doit comporter au moins {{ limit }} chiffres",
     *      maxMessage = "trop long, max {{ limit }} chiffres"
     * )

     */
    private $phone;
    /**
     * @ORM\Column(type="integer")
     */
    private $id_user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;

        return $this;
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

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

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
    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }
}
