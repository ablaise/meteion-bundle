<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relic3.
 *
 * @ORM\Table(name="relic3", indexes={@ORM\Index(name="idx_610c14324ff48c70", columns={"item_animus"}), @ORM\Index(name="idx_610c14326bee4b4c", columns={"item_scroll"}), @ORM\Index(name="idx_610c143262fa7b63", columns={"item_novus"})})
 * @ORM\Entity
 */
class Relic3
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="relic3_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="materia_limit", type="integer", nullable=true)
     */
    private $materiaLimit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="integer", nullable=true)
     */
    private $column6;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_novus", referencedColumnName="pk")
     * })
     */
    private $itemNovus;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_scroll", referencedColumnName="pk")
     * })
     */
    private $itemScroll;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_animus", referencedColumnName="pk")
     * })
     */
    private $itemAnimus;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getMateriaLimit(): ?int
    {
        return $this->materiaLimit;
    }

    public function setMateriaLimit(?int $materiaLimit): self
    {
        $this->materiaLimit = $materiaLimit;

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

    public function getColumn6(): ?int
    {
        return $this->column6;
    }

    public function setColumn6(?int $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getItemNovus(): ?Item
    {
        return $this->itemNovus;
    }

    public function setItemNovus(?Item $itemNovus): self
    {
        $this->itemNovus = $itemNovus;

        return $this;
    }

    public function getItemScroll(): ?Item
    {
        return $this->itemScroll;
    }

    public function setItemScroll(?Item $itemScroll): self
    {
        $this->itemScroll = $itemScroll;

        return $this;
    }

    public function getItemAnimus(): ?Item
    {
        return $this->itemAnimus;
    }

    public function setItemAnimus(?Item $itemAnimus): self
    {
        $this->itemAnimus = $itemAnimus;

        return $this;
    }
}
