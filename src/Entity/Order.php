<?php
namespace  App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="orders")
*/
class Order
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $deliveryName;

    /**
     * @ORM\Column(type="text")
     */
    private $deliveryAddress;


    /**
     * @ORM\Column(type="datetime", name="created_at")
     * @var \DateTimeInterface
     */
    private $createdAt;

    /**
     * @return mixed
     */
    public function getDeliveryName()
    {
        return $this->deliveryName;
    }

    /**
     * @param mixed $deliveryName
     */
    public function setDeliveryName($deliveryName)
    {
        $this->deliveryName = $deliveryName;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @param mixed $deliveryAddress
     */
    public function setDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }



    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    /**
     * @param \DateTimeInterface $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }


    /**
     * @ORM\Column(type="datetime", name="cancelled_at", nullable=true)
     * @var \DateTimeInterface
     */
    private ?\DateTimeImmutable $cancelledAt = null;

    /**
     * @return \DateTimeInterface
     */
    public function getCancelledAt()
    {
        return $this->cancelledAt;
    }

    /**
     * @param \DateTimeInterface $cancelledAt
     */
    public function setCancelledAt($cancelledAt): void
    {
        $this->cancelledAt = $cancelledAt;
    }




}