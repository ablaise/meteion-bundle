<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TreasureHuntRank.
 *
 * @ORM\Table(name="treasure_hunt_rank", indexes={@ORM\Index(name="idx_66f91634ebd5a787", columns={"key_item_name"}), @ORM\Index(name="idx_66f9163496133afd", columns={"item_name"}), @ORM\Index(name="idx_66f916349b45ff83", columns={"instance_map"})})
 * @ORM\Entity
 */
class TreasureHuntRank
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="treasure_hunt_rank_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_party_size", type="integer", nullable=true)
     */
    private $maxPartySize;

    /**
     * @var int|null
     *
     * @ORM\Column(name="treasure_hunt_texture", type="integer", nullable=true)
     */
    private $treasureHuntTexture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="bigint", nullable=true)
     */
    private $column8;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_9", type="boolean", nullable=true)
     */
    private $column9;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instance_map", referencedColumnName="pk")
     * })
     */
    private $instanceMap;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="key_item_name", referencedColumnName="pk")
     * })
     */
    private $keyItemName;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_name", referencedColumnName="pk")
     * })
     */
    private $itemName;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?int
    {
        return $this->column1;
    }

    public function setColumn1(?int $column1): self
    {
        $this->column1 = $column1;

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

    public function getMaxPartySize(): ?int
    {
        return $this->maxPartySize;
    }

    public function setMaxPartySize(?int $maxPartySize): self
    {
        $this->maxPartySize = $maxPartySize;

        return $this;
    }

    public function getTreasureHuntTexture(): ?int
    {
        return $this->treasureHuntTexture;
    }

    public function setTreasureHuntTexture(?int $treasureHuntTexture): self
    {
        $this->treasureHuntTexture = $treasureHuntTexture;

        return $this;
    }

    public function getColumn8(): ?string
    {
        return $this->column8;
    }

    public function setColumn8(?string $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getColumn9(): ?bool
    {
        return $this->column9;
    }

    public function setColumn9(?bool $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getInstanceMap(): ?EventItem
    {
        return $this->instanceMap;
    }

    public function setInstanceMap(?EventItem $instanceMap): self
    {
        $this->instanceMap = $instanceMap;

        return $this;
    }

    public function getKeyItemName(): ?EventItem
    {
        return $this->keyItemName;
    }

    public function setKeyItemName(?EventItem $keyItemName): self
    {
        $this->keyItemName = $keyItemName;

        return $this;
    }

    public function getItemName(): ?Item
    {
        return $this->itemName;
    }

    public function setItemName(?Item $itemName): self
    {
        $this->itemName = $itemName;

        return $this;
    }
}
