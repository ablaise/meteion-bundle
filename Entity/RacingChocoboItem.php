<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RacingChocoboItem.
 *
 * @ORM\Table(name="racing_chocobo_item", indexes={@ORM\Index(name="idx_ea8cdea41f1b251e", columns={"item"})})
 * @ORM\Entity
 */
class RacingChocoboItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="racing_chocobo_item_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="category", type="integer", nullable=true)
     */
    private $category;

    /**
     * @var int|null
     *
     * @ORM\Column(name="param_0", type="integer", nullable=true)
     */
    private $param0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="param_1", type="integer", nullable=true)
     */
    private $param1;

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

    public function getCategory(): ?int
    {
        return $this->category;
    }

    public function setCategory(?int $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getParam0(): ?int
    {
        return $this->param0;
    }

    public function setParam0(?int $param0): self
    {
        $this->param0 = $param0;

        return $this;
    }

    public function getParam1(): ?int
    {
        return $this->param1;
    }

    public function setParam1(?int $param1): self
    {
        $this->param1 = $param1;

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
