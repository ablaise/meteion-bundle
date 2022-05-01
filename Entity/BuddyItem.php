<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuddyItem.
 *
 * @ORM\Table(name="buddy_item", indexes={@ORM\Index(name="idx_fc502071f1b251e", columns={"item"})})
 * @ORM\Entity
 */
class BuddyItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="buddy_item_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="use_field", type="boolean", nullable=true)
     */
    private $useField;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="use_training", type="boolean", nullable=true)
     */
    private $useTraining;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_4", type="boolean", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item", referencedColumnName="pk")
     * })
     */
    private $item;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getUseField(): ?bool
    {
        return $this->useField;
    }

    public function setUseField(?bool $useField): self
    {
        $this->useField = $useField;

        return $this;
    }

    public function getUseTraining(): ?bool
    {
        return $this->useTraining;
    }

    public function setUseTraining(?bool $useTraining): self
    {
        $this->useTraining = $useTraining;

        return $this;
    }

    public function getColumn4(): ?bool
    {
        return $this->column4;
    }

    public function setColumn4(?bool $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getItem(): ?Item
    {
        return $this->item;
    }

    public function setItem(?Item $item): self
    {
        $this->item = $item;

        return $this;
    }
}
