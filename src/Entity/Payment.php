<?php

namespace App\Entity;

//use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PaymentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaymentRepository::class)]
#[ApiResource]
class Payment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'payments')]
    private ?Order $aboutOrder = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $paid = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $total = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $details = null;

    #[ORM\Column(length: 30)]
    private ?string $type = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $paymentDate = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPaid(): ?string
    {
        return $this->paid;
    }

    public function setPaid(string $paid): static
    {
        $this->paid = $paid;

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

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(string $details): static
    {
        $this->details = $details;

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

    public function getPaymentDate(): ?\DateTimeInterface
    {
        return $this->paymentDate;
    }

    public function setPaymentDate(\DateTimeInterface $paymentDate): static
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }
}
