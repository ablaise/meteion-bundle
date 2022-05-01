<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CollectablesShop.
 *
 * @ORM\Table(name="collectables_shop", indexes={@ORM\Index(name="idx_5592b75c4317f817", columns={"quest"})})
 * @ORM\Entity
 */
class CollectablesShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="collectables_shop_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_type", type="integer", nullable=true)
     */
    private $rewardType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_items_0", type="integer", nullable=true)
     */
    private $shopItems0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_items_1", type="integer", nullable=true)
     */
    private $shopItems1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_items_2", type="integer", nullable=true)
     */
    private $shopItems2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_items_3", type="integer", nullable=true)
     */
    private $shopItems3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_items_4", type="integer", nullable=true)
     */
    private $shopItems4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_items_5", type="integer", nullable=true)
     */
    private $shopItems5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_items_6", type="integer", nullable=true)
     */
    private $shopItems6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_items_7", type="integer", nullable=true)
     */
    private $shopItems7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_items_8", type="integer", nullable=true)
     */
    private $shopItems8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_items_9", type="integer", nullable=true)
     */
    private $shopItems9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_items_10", type="integer", nullable=true)
     */
    private $shopItems10;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest", referencedColumnName="pk")
     * })
     */
    private $quest;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getRewardType(): ?int
    {
        return $this->rewardType;
    }

    public function setRewardType(?int $rewardType): self
    {
        $this->rewardType = $rewardType;

        return $this;
    }

    public function getShopItems0(): ?int
    {
        return $this->shopItems0;
    }

    public function setShopItems0(?int $shopItems0): self
    {
        $this->shopItems0 = $shopItems0;

        return $this;
    }

    public function getShopItems1(): ?int
    {
        return $this->shopItems1;
    }

    public function setShopItems1(?int $shopItems1): self
    {
        $this->shopItems1 = $shopItems1;

        return $this;
    }

    public function getShopItems2(): ?int
    {
        return $this->shopItems2;
    }

    public function setShopItems2(?int $shopItems2): self
    {
        $this->shopItems2 = $shopItems2;

        return $this;
    }

    public function getShopItems3(): ?int
    {
        return $this->shopItems3;
    }

    public function setShopItems3(?int $shopItems3): self
    {
        $this->shopItems3 = $shopItems3;

        return $this;
    }

    public function getShopItems4(): ?int
    {
        return $this->shopItems4;
    }

    public function setShopItems4(?int $shopItems4): self
    {
        $this->shopItems4 = $shopItems4;

        return $this;
    }

    public function getShopItems5(): ?int
    {
        return $this->shopItems5;
    }

    public function setShopItems5(?int $shopItems5): self
    {
        $this->shopItems5 = $shopItems5;

        return $this;
    }

    public function getShopItems6(): ?int
    {
        return $this->shopItems6;
    }

    public function setShopItems6(?int $shopItems6): self
    {
        $this->shopItems6 = $shopItems6;

        return $this;
    }

    public function getShopItems7(): ?int
    {
        return $this->shopItems7;
    }

    public function setShopItems7(?int $shopItems7): self
    {
        $this->shopItems7 = $shopItems7;

        return $this;
    }

    public function getShopItems8(): ?int
    {
        return $this->shopItems8;
    }

    public function setShopItems8(?int $shopItems8): self
    {
        $this->shopItems8 = $shopItems8;

        return $this;
    }

    public function getShopItems9(): ?int
    {
        return $this->shopItems9;
    }

    public function setShopItems9(?int $shopItems9): self
    {
        $this->shopItems9 = $shopItems9;

        return $this;
    }

    public function getShopItems10(): ?int
    {
        return $this->shopItems10;
    }

    public function setShopItems10(?int $shopItems10): self
    {
        $this->shopItems10 = $shopItems10;

        return $this;
    }

    public function getQuest(): ?Quest
    {
        return $this->quest;
    }

    public function setQuest(?Quest $quest): self
    {
        $this->quest = $quest;

        return $this;
    }
}
