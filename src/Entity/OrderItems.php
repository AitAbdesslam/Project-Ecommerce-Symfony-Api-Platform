<?php

namespace App\Entity;

//use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\OrderItemsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderItemsRepository::class)]
#[ApiResource]
class OrderItems
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'orderItems')]
    private ?Product $product = null;

    #[ORM\ManyToOne(inversedBy: 'orderItems')]
    private ?Order $aboutOrder = null;

    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $cost_unitaire = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $total = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): static
    {
        $this->product = $product;

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

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getCostUnitaire(): ?string
    {
        return $this->cost_unitaire;
    }

    public function setCostUnitaire(string $cost_unitaire): static
    {
        $this->cost_unitaire = $cost_unitaire;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(string $total): static
    {
        $this->total = $total;

        return $this;
    }
}
