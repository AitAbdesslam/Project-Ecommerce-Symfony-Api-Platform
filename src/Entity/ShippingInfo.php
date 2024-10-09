<?php

namespace App\Entity;

//use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ShippingInfoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ShippingInfoRepository::class)]
#[ApiResource]
class ShippingInfo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $cost = null;

    #[ORM\Column(length: 30)]
    private ?string $type = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $address = null;

    #[ORM\ManyToOne(inversedBy: 'shippingInfos')]
    private ?Order $aboutOrder = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCost(): ?string
    {
        return $this->cost;
    }

    public function setCost(string $cost): static
    {
        $this->cost = $cost;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getAboutOrder(): ?Order
    {
        return $this->aboutOrder;
    }

    public function setAboutOrder(?Order $aboutOrder): static
    {
        $this->aboutOrder = $aboutOrder;

        return $this;
    }
}
