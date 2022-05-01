<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GilShopItem.
 *
 * @ORM\Table(name="gil_shop_item", indexes={@ORM\Index(name="idx_e33ec2ecd2f45800", columns={"quest_required_1"}), @ORM\Index(name="idx_e33ec2eca5f36896", columns={"quest_required_0"}), @ORM\Index(name="idx_e33ec2ec2c198b64", columns={"achievement_required"}), @ORM\Index(name="idx_e33ec2ec1f1b251e", columns={"item"})})
 * @ORM\Entity
 */
class GilShopItem
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gil_shop_item_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_2", type="boolean", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="integer", nullable=true)
     */
    private $column7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="state_required", type="bigint", nullable=true)
     */
    private $stateRequired;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch", type="bigint", nullable=true)
     */
    private $patch;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_required", referencedColumnName="pk")
     * })
     */
    private $achievementRequired;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_required_1", referencedColumnName="pk")
     * })
     */
    private $questRequired1;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_required_0", referencedColumnName="pk")
     * })
     */
    private $questRequired0;

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

    public function getColumn2(): ?bool
    {
        return $this->column2;
    }

    public function setColumn2(?bool $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getColumn3(): ?int
    {
        return $this->column3;
    }

    public function setColumn3(?int $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getColumn7(): ?int
    {
        return $this->column7;
    }

    public function setColumn7(?int $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getStateRequired(): ?string
    {
        return $this->stateRequired;
    }

    public function setStateRequired(?string $stateRequired): self
    {
        $this->stateRequired = $stateRequired;

        return $this;
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

    public function getAchievementRequired(): ?Achievement
    {
        return $this->achievementRequired;
    }

    public function setAchievementRequired(?Achievement $achievementRequired): self
    {
        $this->achievementRequired = $achievementRequired;

        return $this;
    }

    public function getQuestRequired1(): ?Quest
    {
        return $this->questRequired1;
    }

    public function setQuestRequired1(?Quest $questRequired1): self
    {
        $this->questRequired1 = $questRequired1;

        return $this;
    }

    public function getQuestRequired0(): ?Quest
    {
        return $this->questRequired0;
    }

    public function setQuestRequired0(?Quest $questRequired0): self
    {
        $this->questRequired0 = $questRequired0;

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
