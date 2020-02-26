<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CarRepository")
 */
class Car
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
    private $matricule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $model;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Agency",inversedBy="car")
     */
    private $agency;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="App\Entity\CarImage",mappedBy="car")
     *
     */
    private $car_image;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="App\Entity\Command",mappedBy="car")
     *
     */
    private $command;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Offer",mappedBy="car")
     */
    private $offer;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="App\Entity\Review",mappedBy="car")
     *
     */
    private $review;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="App\Entity\CarOption",mappedBy="car")
     *
     */
    private $car_option;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CarType",inversedBy="car")
     */
    private $car_type;

    public function __construct()
    {
        $this->car_image = new ArrayCollection();
        $this->command = new ArrayCollection();
        $this->offer = new ArrayCollection();
        $this->review = new ArrayCollection();
        $this->car_option = new ArrayCollection();
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

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

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

    public function getAgency(): ?Agency
    {
        return $this->agency;
    }

    public function setAgency(?Agency $agency): self
    {
        $this->agency = $agency;

        return $this;
    }

    /**
     * @return Collection|CarImage[]
     */
    public function getCarImage(): Collection
    {
        return $this->car_image;
    }

    public function addCarImage(CarImage $carImage): self
    {
        if (!$this->car_image->contains($carImage)) {
            $this->car_image[] = $carImage;
            $carImage->setCar($this);
        }

        return $this;
    }

    public function removeCarImage(CarImage $carImage): self
    {
        if ($this->car_image->contains($carImage)) {
            $this->car_image->removeElement($carImage);
            // set the owning side to null (unless already changed)
            if ($carImage->getCar() === $this) {
                $carImage->setCar(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Command[]
     */
    public function getCommand(): Collection
    {
        return $this->command;
    }

    public function addCommand(Command $command): self
    {
        if (!$this->command->contains($command)) {
            $this->command[] = $command;
            $command->setCar($this);
        }

        return $this;
    }

    public function removeCommand(Command $command): self
    {
        if ($this->command->contains($command)) {
            $this->command->removeElement($command);
            // set the owning side to null (unless already changed)
            if ($command->getCar() === $this) {
                $command->setCar(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Offer[]
     */
    public function getOffer(): Collection
    {
        return $this->offer;
    }

    public function addOffer(Offer $offer): self
    {
        if (!$this->offer->contains($offer)) {
            $this->offer[] = $offer;
            $offer->setCar($this);
        }

        return $this;
    }

    public function removeOffer(Offer $offer): self
    {
        if ($this->offer->contains($offer)) {
            $this->offer->removeElement($offer);
            // set the owning side to null (unless already changed)
            if ($offer->getCar() === $this) {
                $offer->setCar(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Review[]
     */
    public function getReview(): Collection
    {
        return $this->review;
    }

    public function addReview(Review $review): self
    {
        if (!$this->review->contains($review)) {
            $this->review[] = $review;
            $review->setCar($this);
        }

        return $this;
    }

    public function removeReview(Review $review): self
    {
        if ($this->review->contains($review)) {
            $this->review->removeElement($review);
            // set the owning side to null (unless already changed)
            if ($review->getCar() === $this) {
                $review->setCar(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CarOption[]
     */
    public function getCarOption(): Collection
    {
        return $this->car_option;
    }

    public function addCarOption(CarOption $carOption): self
    {
        if (!$this->car_option->contains($carOption)) {
            $this->car_option[] = $carOption;
            $carOption->setCar($this);
        }

        return $this;
    }

    public function removeCarOption(CarOption $carOption): self
    {
        if ($this->car_option->contains($carOption)) {
            $this->car_option->removeElement($carOption);
            // set the owning side to null (unless already changed)
            if ($carOption->getCar() === $this) {
                $carOption->setCar(null);
            }
        }

        return $this;
    }

    public function getCarType(): ?CarType
    {
        return $this->car_type;
    }

    public function setCarType(?CarType $car_type): self
    {
        $this->car_type = $car_type;

        return $this;
    }

}
