<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MyctemporaryItem.
 *
 * @ORM\Table(name="myctemporary_item", indexes={@ORM\Index(name="idx_6014d66264c19c1", columns={"category"}), @ORM\Index(name="idx_6014d66247cc8c92", columns={"action"})})
 * @ORM\Entity
 */
class MyctemporaryItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="myctemporary_item_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max", type="integer", nullable=true)
     */
    private $max;

    /**
     * @var int|null
     *
     * @ORM\Column(name="weight", type="integer", nullable=true)
     */
    private $weight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action", referencedColumnName="pk")
     * })
     */
    private $action;

    /**
     * @var MyctemporaryItemUicategory
     *
     * @ORM\ManyToOne(targetEntity="MyctemporaryItemUicategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category", referencedColumnName="pk")
     * })
     */
    private $category;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getMax(): ?int
    {
        return $this->max;
    }

    public function setMax(?int $max): self
    {
        $this->max = $max;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(?int $weight): self
    {
        $this->weight = $weight;

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

    public function getAction(): ?Action
    {
        return $this->action;
    }

    public function setAction(?Action $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getCategory(): ?MyctemporaryItemUicategory
    {
        return $this->category;
    }

    public function setCategory(?MyctemporaryItemUicategory $category): self
    {
        $this->category = $category;

        return $this;
    }
}
