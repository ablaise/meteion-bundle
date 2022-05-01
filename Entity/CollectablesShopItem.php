<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CollectablesShopItem.
 *
 * @ORM\Table(name="collectables_shop_item", indexes={@ORM\Index(name="idx_623c463920b2a8e", columns={"collectables_shop_reward_scrip"}), @ORM\Index(name="idx_623c463c307e7d4", columns={"collectables_shop_item_group"}), @ORM\Index(name="idx_623c4631f1b251e", columns={"item"}), @ORM\Index(name="idx_623c463748bb2b7", columns={"collectables_shop_refine"})})
 * @ORM\Entity
 */
class CollectablesShopItem
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="collectables_shop_item_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_min", type="bigint", nullable=true)
     */
    private $levelMin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max", type="bigint", nullable=true)
     */
    private $levelMax;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stars", type="integer", nullable=true)
     */
    private $stars;

    /**
     * @var int|null
     *
     * @ORM\Column(name="key", type="integer", nullable=true)
     */
    private $key;

    /**
     * @var CollectablesShopRewardScrip
     *
     * @ORM\ManyToOne(targetEntity="CollectablesShopRewardScrip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="collectables_shop_reward_scrip", referencedColumnName="pk")
     * })
     */
    private $collectablesShopRewardScrip;

    /**
     * @var CollectablesShopRefine
     *
     * @ORM\ManyToOne(targetEntity="CollectablesShopRefine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="collectables_shop_refine", referencedColumnName="pk")
     * })
     */
    private $collectablesShopRefine;

    /**
     * @var CollectablesShopItemGroup
     *
     * @ORM\ManyToOne(targetEntity="CollectablesShopItemGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="collectables_shop_item_group", referencedColumnName="pk")
     * })
     */
    private $collectablesShopItemGroup;

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

    public function getLevelMin(): ?string
    {
        return $this->levelMin;
    }

    public function setLevelMin(?string $levelMin): self
    {
        $this->levelMin = $levelMin;

        return $this;
    }

    public function getLevelMax(): ?string
    {
        return $this->levelMax;
    }

    public function setLevelMax(?string $levelMax): self
    {
        $this->levelMax = $levelMax;

        return $this;
    }

    public function getStars(): ?int
    {
        return $this->stars;
    }

    public function setStars(?int $stars): self
    {
        $this->stars = $stars;

        return $this;
    }

    public function getKey(): ?int
    {
        return $this->key;
    }

    public function setKey(?int $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function getCollectablesShopRewardScrip(): ?CollectablesShopRewardScrip
    {
        return $this->collectablesShopRewardScrip;
    }

    public function setCollectablesShopRewardScrip(?CollectablesShopRewardScrip $collectablesShopRewardScrip): self
    {
        $this->collectablesShopRewardScrip = $collectablesShopRewardScrip;

        return $this;
    }

    public function getCollectablesShopRefine(): ?CollectablesShopRefine
    {
        return $this->collectablesShopRefine;
    }

    public function setCollectablesShopRefine(?CollectablesShopRefine $collectablesShopRefine): self
    {
        $this->collectablesShopRefine = $collectablesShopRefine;

        return $this;
    }

    public function getCollectablesShopItemGroup(): ?CollectablesShopItemGroup
    {
        return $this->collectablesShopItemGroup;
    }

    public function setCollectablesShopItemGroup(?CollectablesShopItemGroup $collectablesShopItemGroup): self
    {
        $this->collectablesShopItemGroup = $collectablesShopItemGroup;

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
