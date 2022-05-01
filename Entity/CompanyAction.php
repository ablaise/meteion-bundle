<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyAction.
 *
 * @ORM\Table(name="company_action", indexes={@ORM\Index(name="idx_7a53e8e718c07780", columns={"fcrank"})})
 * @ORM\Entity
 */
class CompanyAction
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="company_action_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cost", type="bigint", nullable=true)
     */
    private $cost;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="purchasable", type="boolean", nullable=true)
     */
    private $purchasable;

    /**
     * @var Fcrank
     *
     * @ORM\ManyToOne(targetEntity="Fcrank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fcrank", referencedColumnName="pk")
     * })
     */
    private $fcrank;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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

    public function getCost(): ?string
    {
        return $this->cost;
    }

    public function setCost(?string $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(?int $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getPurchasable(): ?bool
    {
        return $this->purchasable;
    }

    public function setPurchasable(?bool $purchasable): self
    {
        $this->purchasable = $purchasable;

        return $this;
    }

    public function getFcrank(): ?Fcrank
    {
        return $this->fcrank;
    }

    public function setFcrank(?Fcrank $fcrank): self
    {
        $this->fcrank = $fcrank;

        return $this;
    }
}
