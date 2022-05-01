<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InclusionShopSeries.
 *
 * @ORM\Table(name="inclusion_shop_series", indexes={@ORM\Index(name="idx_7b6ff8682e3d4d89", columns={"special_shop"})})
 * @ORM\Entity
 */
class InclusionShopSeries
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="inclusion_shop_series_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var SpecialShop
     *
     * @ORM\ManyToOne(targetEntity="SpecialShop")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop", referencedColumnName="pk")
     * })
     */
    private $specialShop;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getSpecialShop(): ?SpecialShop
    {
        return $this->specialShop;
    }

    public function setSpecialShop(?SpecialShop $specialShop): self
    {
        $this->specialShop = $specialShop;

        return $this;
    }
}
