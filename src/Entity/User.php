<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 *
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var
     * @ORM\Column(name="first_name",type="string", length=255,nullable=true)
     *
     */
    private $first_name;

    /**
     * @var
     * @ORM\Column(name="last_name", type="string", length=255,nullable=true)
     *
     */
    private $last_name;

    /**
     * @var
     * @ORM\Column(type="string", length=255,nullable=true)
     *
     */
    private $address;

    /**
     * @var
     * @ORM\Column(type="string", length=255,nullable=true)
     *
     */
    private $postal_code;


    /**
     * @var
     * @ORM\Column(type="string", length=255,nullable=true)
     *
     */
    private $phone;

    /**
     * @var
     * @ORM\Column(type="string", length=50,nullable=true)
     *
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function setPostalCode(?string $postal_code): self
    {
        $this->postal_code = $postal_code;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
