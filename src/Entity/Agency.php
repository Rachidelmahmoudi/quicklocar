<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AgencyRepository")
 */
class Agency
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Car",mappedBy="agency")
     */
    private $car;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AgencySubscription",mappedBy="agency")
     */
    private $agency_subscription;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AgencyReview",mappedBy="agency")
     */
    private $agency_review;

    public function __construct()
    {
        $this->car = new ArrayCollection();
        $this->agency_subscription = new ArrayCollection();
        $this->agency_review = new ArrayCollection();
    }

    /**
     * @return Collection|Car[]
     */
    public function getCar(): Collection
    {
        return $this->car;
    }

    public function addCar(Car $car): self
    {
        if (!$this->car->contains($car)) {
            $this->car[] = $car;
            $car->setAgency($this);
        }

        return $this;
    }

    public function removeCar(Car $car): self
    {
        if ($this->car->contains($car)) {
            $this->car->removeElement($car);
            // set the owning side to null (unless already changed)
            if ($car->getAgency() === $this) {
                $car->setAgency(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|AgencySubscription[]
     */
    public function getAgencySubscription(): Collection
    {
        return $this->agency_subscription;
    }

    public function addAgencySubscription(AgencySubscription $agencySubscription): self
    {
        if (!$this->agency_subscription->contains($agencySubscription)) {
            $this->agency_subscription[] = $agencySubscription;
            $agencySubscription->setAgency($this);
        }

        return $this;
    }

    public function removeAgencySubscription(AgencySubscription $agencySubscription): self
    {
        if ($this->agency_subscription->contains($agencySubscription)) {
            $this->agency_subscription->removeElement($agencySubscription);
            // set the owning side to null (unless already changed)
            if ($agencySubscription->getAgency() === $this) {
                $agencySubscription->setAgency(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|AgencyReview[]
     */
    public function getAgencyReview(): Collection
    {
        return $this->agency_review;
    }

    public function addAgencyReview(AgencyReview $agencyReview): self
    {
        if (!$this->agency_review->contains($agencyReview)) {
            $this->agency_review[] = $agencyReview;
            $agencyReview->setAgency($this);
        }

        return $this;
    }

    public function removeAgencyReview(AgencyReview $agencyReview): self
    {
        if ($this->agency_review->contains($agencyReview)) {
            $this->agency_review->removeElement($agencyReview);
            // set the owning side to null (unless already changed)
            if ($agencyReview->getAgency() === $this) {
                $agencyReview->setAgency(null);
            }
        }

        return $this;
    }

}
