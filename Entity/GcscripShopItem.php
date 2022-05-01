<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcscripShopItem.
 *
 * @ORM\Table(name="gcscrip_shop_item", indexes={@ORM\Index(name="idx_8c023e01f6e107e6", columns={"required_grand_company_rank"}), @ORM\Index(name="idx_8c023e011f1b251e", columns={"item"})})
 * @ORM\Entity
 */
class GcscripShopItem
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gcscrip_shop_item_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cost_gcseals", type="bigint", nullable=true)
     */
    private $costGcseals;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_key", type="integer", nullable=true)
     */
    private $sortKey;

    /**
     * @var GrandCompanyRank
     *
     * @ORM\ManyToOne(targetEntity="GrandCompanyRank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_grand_company_rank", referencedColumnName="pk")
     * })
     */
    private $requiredGrandCompanyRank;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item", referencedColumnName="pk")
     * })
     */
    private $item;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getCostGcseals(): ?string
    {
        return $this->costGcseals;
    }

    public function setCostGcseals(?string $costGcseals): self
    {
        $this->costGcseals = $costGcseals;

        return $this;
    }

    public function getSortKey(): ?int
    {
        return $this->sortKey;
    }

    public function setSortKey(?int $sortKey): self
    {
        $this->sortKey = $sortKey;

        return $this;
    }

    public function getRequiredGrandCompanyRank(): ?GrandCompanyRank
    {
        return $this->requiredGrandCompanyRank;
    }

    public function setRequiredGrandCompanyRank(?GrandCompanyRank $requiredGrandCompanyRank): self
    {
        $this->requiredGrandCompanyRank = $requiredGrandCompanyRank;

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
