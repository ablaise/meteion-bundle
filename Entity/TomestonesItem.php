<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TomestonesItem.
 *
 * @ORM\Table(name="tomestones_item", indexes={@ORM\Index(name="idx_766975167cfc52b2", columns={"tomestones"}), @ORM\Index(name="idx_766975161f1b251e", columns={"item"})})
 * @ORM\Entity
 */
class TomestonesItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tomestones_item_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="integer", nullable=true)
     */
    private $column2;

    /**
     * @var Tomestones
     *
     * @ORM\ManyToOne(targetEntity="Tomestones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tomestones", referencedColumnName="pk")
     * })
     */
    private $tomestones;

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

    public function getColumn2(): ?int
    {
        return $this->column2;
    }

    public function setColumn2(?int $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getTomestones(): ?Tomestones
    {
        return $this->tomestones;
    }

    public function setTomestones(?Tomestones $tomestones): self
    {
        $this->tomestones = $tomestones;

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
