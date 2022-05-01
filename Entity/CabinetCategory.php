<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CabinetCategory.
 *
 * @ORM\Table(name="cabinet_category", indexes={@ORM\Index(name="idx_32e59f9864c19c1", columns={"category"})})
 * @ORM\Entity
 */
class CabinetCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cabinet_category_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="menu_order", type="integer", nullable=true)
     */
    private $menuOrder;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var Addon
     *
     * @ORM\ManyToOne(targetEntity="Addon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category", referencedColumnName="pk")
     * })
     */
    private $category;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getMenuOrder(): ?int
    {
        return $this->menuOrder;
    }

    public function setMenuOrder(?int $menuOrder): self
    {
        $this->menuOrder = $menuOrder;

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

    public function getCategory(): ?Addon
    {
        return $this->category;
    }

    public function setCategory(?Addon $category): self
    {
        $this->category = $category;

        return $this;
    }
}
