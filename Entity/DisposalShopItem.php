<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DisposalShopItem.
 *
 * @ORM\Table(name="disposal_shop_item", indexes={@ORM\Index(name="idx_2d68db8c5063248a", columns={"item_disposed"}), @ORM\Index(name="idx_2d68db8ca561f10c", columns={"item_received"})})
 * @ORM\Entity
 */
class DisposalShopItem
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="disposal_shop_item_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_2", type="boolean", nullable=true)
     */
    private $column2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_4", type="boolean", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_received", type="bigint", nullable=true)
     */
    private $quantityReceived;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="bigint", nullable=true)
     */
    private $column6;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received", referencedColumnName="pk")
     * })
     */
    private $itemReceived;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_disposed", referencedColumnName="pk")
     * })
     */
    private $itemDisposed;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getColumn2(): ?bool
    {
        return $this->column2;
    }

    public function setColumn2(?bool $column2): self
    {
        $this->column2 = $column2;

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

    public function getQuantityReceived(): ?string
    {
        return $this->quantityReceived;
    }

    public function setQuantityReceived(?string $quantityReceived): self
    {
        $this->quantityReceived = $quantityReceived;

        return $this;
    }

    public function getColumn6(): ?string
    {
        return $this->column6;
    }

    public function setColumn6(?string $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getItemReceived(): ?Item
    {
        return $this->itemReceived;
    }

    public function setItemReceived(?Item $itemReceived): self
    {
        $this->itemReceived = $itemReceived;

        return $this;
    }

    public function getItemDisposed(): ?Item
    {
        return $this->itemDisposed;
    }

    public function setItemDisposed(?Item $itemDisposed): self
    {
        $this->itemDisposed = $itemDisposed;

        return $this;
    }
}
