<?php

namespace App\Entity;

//use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\OrderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
#[ApiResource]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $reference = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $deliveryDate = null;

    #[ORM\Column(length: 30)]
    private ?string $deliveryStatus = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $totalAmount = null;

    #[ORM\ManyToOne(inversedBy: 'orders')]
    private ?Customer $customer = null;

    #[ORM\OneToMany(mappedBy: 'aboutOrder', targetEntity: OrderItems::class)]
    private Collection $orderItems;

    #[ORM\OneToMany(mappedBy: 'aboutOrder', targetEntity: ShippingInfo::class)]
    private Collection $shippingInfos;

    #[ORM\OneToMany(mappedBy: 'aboutOrder', targetEntity: Payment::class)]
    private Collection $payments;

    public function __construct()
    {
        $this->orderItems = new ArrayCollection();
        $this->shippingInfos = new ArrayCollection();
        $this->payments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): static
    {
        $this->reference = $reference;

        return $this;
    }

    public function getCreatedDate(): ?\DateTimeInterface
    {
        return $this->createdDate;
    }

    public function setCreatedDate(\DateTimeInterface $createdDate): static
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getDeliveryDate(): ?\DateTimeInterface
    {
        return $this->deliveryDate;
    }

    public function setDeliveryDate(\DateTimeInterface $deliveryDate): static
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    public function getDeliveryStatus(): ?string
    {
        return $this->deliveryStatus;
    }

    public function setDeliveryStatus(string $deliveryStatus): static
    {
        $this->deliveryStatus = $deliveryStatus;

        return $this;
    }

    public function getTotalAmount(): ?string
    {
        return $this->totalAmount;
    }

    public function setTotalAmount(string $totalAmount): static
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(?Customer $customer): static
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return Collection<int, OrderItems>
     */
    public function getOrderItems(): Collection
    {
        return $this->orderItems;
    }

    public function addOrderItem(OrderItems $orderItem): static
    {
        if (!$this->orderItems->contains($orderItem)) {
            $this->orderItems->add($orderItem);
            $orderItem->setAboutOrder($this);
        }

        return $this;
    }

    public function removeOrderItem(OrderItems $orderItem): static
    {
        if ($this->orderItems->removeElement($orderItem)) {
            // set the owning side to null (unless already changed)
            if ($orderItem->getAboutOrder() === $this) {
                $orderItem->setAboutOrder(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ShippingInfo>
     */
    public function getShippingInfos(): Collection
    {
        return $this->shippingInfos;
    }

    public function addShippingInfo(ShippingInfo $shippingInfo): static
    {
        if (!$this->shippingInfos->contains($shippingInfo)) {
            $this->shippingInfos->add($shippingInfo);
            $shippingInfo->setAboutOrder($this);
        }

        return $this;
    }

    public function removeShippingInfo(ShippingInfo $shippingInfo): static
    {
        if ($this->shippingInfos->removeElement($shippingInfo)) {
            // set the owning side to null (unless already changed)
            if ($shippingInfo->getAboutOrder() === $this) {
                $shippingInfo->setAboutOrder(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Payment>
     */
    public function getPayments(): Collection
    {
        return $this->payments;
    }

    public function addPayment(Payment $payment): static
    {
        if (!$this->payments->contains($payment)) {
            $this->payments->add($payment);
            $payment->setAboutOrder($this);
        }

        return $this;
    }

    public function removePayment(Payment $payment): static
    {
        if ($this->payments->removeElement($payment)) {
            // set the owning side to null (unless already changed)
            if ($payment->getAboutOrder() === $this) {
                $payment->setAboutOrder(null);
            }
        }

        return $this;
    }
}
