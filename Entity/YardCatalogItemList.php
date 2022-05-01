<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * YardCatalogItemList.
 *
 * @ORM\Table(name="yard_catalog_item_list", indexes={@ORM\Index(name="idx_4b04764b64c19c1", columns={"category"}), @ORM\Index(name="idx_4b04764b1f1b251e", columns={"item"})})
 * @ORM\Entity
 */
class YardCatalogItemList
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="yard_catalog_item_list_pk_seq", allocationSize=1, initialValue=1)
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
     * @var YardCatalogCategory
     *
     * @ORM\ManyToOne(targetEntity="YardCatalogCategory")
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

    public function getCategory(): ?YardCatalogCategory
    {
        return $this->category;
    }

    public function setCategory(?YardCatalogCategory $category): self
    {
        $this->category = $category;

        return $this;
    }
}
