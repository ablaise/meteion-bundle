<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcscripShopCategory.
 *
 * @ORM\Table(name="gcscrip_shop_category", indexes={@ORM\Index(name="idx_ec43797fb5ab1f27", columns={"grand_company"})})
 * @ORM\Entity
 */
class GcscripShopCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gcscrip_shop_category_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tier", type="integer", nullable=true)
     */
    private $tier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sub_category", type="integer", nullable=true)
     */
    private $subCategory;

    /**
     * @var GrandCompany
     *
     * @ORM\ManyToOne(targetEntity="GrandCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grand_company", referencedColumnName="pk")
     * })
     */
    private $grandCompany;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getTier(): ?int
    {
        return $this->tier;
    }

    public function setTier(?int $tier): self
    {
        $this->tier = $tier;

        return $this;
    }

    public function getSubCategory(): ?int
    {
        return $this->subCategory;
    }

    public function setSubCategory(?int $subCategory): self
    {
        $this->subCategory = $subCategory;

        return $this;
    }

    public function getGrandCompany(): ?GrandCompany
    {
        return $this->grandCompany;
    }

    public function setGrandCompany(?GrandCompany $grandCompany): self
    {
        $this->grandCompany = $grandCompany;

        return $this;
    }
}
