<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SubscriptionRepository")
 */
class Subscription
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
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AgencySubscription",mappedBy="subscription")
     */
    private $agency_subscription;

    public function __construct()
    {
        $this->agency_subscription = new ArrayCollection();
    }

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
            $agencySubscription->setSubscription($this);
        }

        return $this;
    }

    public function removeAgencySubscription(AgencySubscription $agencySubscription): self
    {
        if ($this->agency_subscription->contains($agencySubscription)) {
            $this->agency_subscription->removeElement($agencySubscription);
            // set the owning side to null (unless already changed)
            if ($agencySubscription->getSubscription() === $this) {
                $agencySubscription->setSubscription(null);
            }
        }

        return $this;
    }
}
