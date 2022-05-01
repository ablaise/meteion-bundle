<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatheringItem.
 *
 * @ORM\Table(name="gathering_item", indexes={@ORM\Index(name="idx_4acea7b6f5d90242", columns={"gathering_item_level"}), @ORM\Index(name="idx_4acea7b64317f817", columns={"quest"})})
 * @ORM\Entity
 */
class GatheringItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gathering_item_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item", type="integer", nullable=true)
     */
    private $item;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_3", type="boolean", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="bigint", nullable=true)
     */
    private $column5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hidden", type="boolean", nullable=true)
     */
    private $isHidden;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest", referencedColumnName="pk")
     * })
     */
    private $quest;

    /**
     * @var GatheringItemLevelConvertTable
     *
     * @ORM\ManyToOne(targetEntity="GatheringItemLevelConvertTable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_level", referencedColumnName="pk")
     * })
     */
    private $gatheringItemLevel;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getItem(): ?int
    {
        return $this->item;
    }

    public function setItem(?int $item): self
    {
        $this->item = $item;

        return $this;
    }

    public function getColumn3(): ?bool
    {
        return $this->column3;
    }

    public function setColumn3(?bool $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getColumn5(): ?string
    {
        return $this->column5;
    }

    public function setColumn5(?string $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getIsHidden(): ?bool
    {
        return $this->isHidden;
    }

    public function setIsHidden(?bool $isHidden): self
    {
        $this->isHidden = $isHidden;

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

    public function getGatheringItemLevel(): ?GatheringItemLevelConvertTable
    {
        return $this->gatheringItemLevel;
    }

    public function setGatheringItemLevel(?GatheringItemLevelConvertTable $gatheringItemLevel): self
    {
        $this->gatheringItemLevel = $gatheringItemLevel;

        return $this;
    }
}
