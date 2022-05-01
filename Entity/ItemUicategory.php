<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemUicategory.
 *
 * @ORM\Table(name="item_uicategory")
 * @ORM\Entity
 */
class ItemUicategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="item_uicategory_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order_minor", type="integer", nullable=true)
     */
    private $orderMinor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order_major", type="integer", nullable=true)
     */
    private $orderMajor;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getOrderMinor(): ?int
    {
        return $this->orderMinor;
    }

    public function setOrderMinor(?int $orderMinor): self
    {
        $this->orderMinor = $orderMinor;

        return $this;
    }

    public function getOrderMajor(): ?int
    {
        return $this->orderMajor;
    }

    public function setOrderMajor(?int $orderMajor): self
    {
        $this->orderMajor = $orderMajor;

        return $this;
    }
}
