<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FurnitureCatalogItemList.
 *
 * @ORM\Table(name="furniture_catalog_item_list", indexes={@ORM\Index(name="idx_ee08cc6164c19c1", columns={"category"}), @ORM\Index(name="idx_ee08cc611f1b251e", columns={"item"})})
 * @ORM\Entity
 */
class FurnitureCatalogItemList
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="furniture_catalog_item_list_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch", type="bigint", nullable=true)
     */
    private $patch;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item", referencedColumnName="pk")
     * })
     */
    private $item;

    /**
     * @var FurnitureCatalogCategory
     *
     * @ORM\ManyToOne(targetEntity="FurnitureCatalogCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category", referencedColumnName="pk")
     * })
     */
    private $category;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPatch(): ?string
    {
        return $this->patch;
    }

    public function setPatch(?string $patch): self
    {
        $this->patch = $patch;

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

    public function getCategory(): ?FurnitureCatalogCategory
    {
        return $this->category;
    }

    public function setCategory(?FurnitureCatalogCategory $category): self
    {
        $this->category = $category;

        return $this;
    }
}
