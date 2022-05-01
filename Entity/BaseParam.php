<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseParam.
 *
 * @ORM\Table(name="base_param")
 * @ORM\Entity
 */
class BaseParam
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="base_param_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="packet_index", type="integer", nullable=true)
     */
    private $packetIndex;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=306, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=306, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order_priority", type="integer", nullable=true)
     */
    private $orderPriority;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hwpn1", type="bigint", nullable=true)
     */
    private $hwpn1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="oh", type="bigint", nullable=true)
     */
    private $oh;

    /**
     * @var int|null
     *
     * @ORM\Column(name="head", type="bigint", nullable=true)
     */
    private $head;

    /**
     * @var int|null
     *
     * @ORM\Column(name="chest", type="bigint", nullable=true)
     */
    private $chest;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hands", type="bigint", nullable=true)
     */
    private $hands;

    /**
     * @var int|null
     *
     * @ORM\Column(name="waist", type="bigint", nullable=true)
     */
    private $waist;

    /**
     * @var int|null
     *
     * @ORM\Column(name="legs", type="bigint", nullable=true)
     */
    private $legs;

    /**
     * @var int|null
     *
     * @ORM\Column(name="feet", type="bigint", nullable=true)
     */
    private $feet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="earring", type="bigint", nullable=true)
     */
    private $earring;

    /**
     * @var int|null
     *
     * @ORM\Column(name="necklace", type="bigint", nullable=true)
     */
    private $necklace;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bracelet", type="bigint", nullable=true)
     */
    private $bracelet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ring", type="bigint", nullable=true)
     */
    private $ring;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hwpn__2", type="bigint", nullable=true)
     */
    private $hwpn2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="under_armor", type="bigint", nullable=true)
     */
    private $underArmor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="chest_head", type="bigint", nullable=true)
     */
    private $chestHead;

    /**
     * @var int|null
     *
     * @ORM\Column(name="chest_head_legs_feet", type="bigint", nullable=true)
     */
    private $chestHeadLegsFeet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_21", type="bigint", nullable=true)
     */
    private $column21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="legs_feet", type="bigint", nullable=true)
     */
    private $legsFeet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="head_chest_hands_legs_feet", type="bigint", nullable=true)
     */
    private $headChestHandsLegsFeet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="chest_legs_gloves", type="bigint", nullable=true)
     */
    private $chestLegsGloves;

    /**
     * @var int|null
     *
     * @ORM\Column(name="chest_legs_feet", type="bigint", nullable=true)
     */
    private $chestLegsFeet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meld_param_0", type="integer", nullable=true)
     */
    private $meldParam0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meld_param_1", type="integer", nullable=true)
     */
    private $meldParam1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meld_param_2", type="integer", nullable=true)
     */
    private $meldParam2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meld_param_3", type="integer", nullable=true)
     */
    private $meldParam3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meld_param_4", type="integer", nullable=true)
     */
    private $meldParam4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meld_param_5", type="integer", nullable=true)
     */
    private $meldParam5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meld_param_6", type="integer", nullable=true)
     */
    private $meldParam6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meld_param_7", type="integer", nullable=true)
     */
    private $meldParam7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meld_param_8", type="integer", nullable=true)
     */
    private $meldParam8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meld_param_9", type="integer", nullable=true)
     */
    private $meldParam9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meld_param_10", type="integer", nullable=true)
     */
    private $meldParam10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meld_param_11", type="integer", nullable=true)
     */
    private $meldParam11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meld_param_12", type="integer", nullable=true)
     */
    private $meldParam12;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_39", type="boolean", nullable=true)
     */
    private $column39;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPacketIndex(): ?int
    {
        return $this->packetIndex;
    }

    public function setPacketIndex(?int $packetIndex): self
    {
        $this->packetIndex = $packetIndex;

        return $this;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getOrderPriority(): ?int
    {
        return $this->orderPriority;
    }

    public function setOrderPriority(?int $orderPriority): self
    {
        $this->orderPriority = $orderPriority;

        return $this;
    }

    public function getHwpn1(): ?string
    {
        return $this->hwpn1;
    }

    public function setHwpn1(?string $hwpn1): self
    {
        $this->hwpn1 = $hwpn1;

        return $this;
    }

    public function getOh(): ?string
    {
        return $this->oh;
    }

    public function setOh(?string $oh): self
    {
        $this->oh = $oh;

        return $this;
    }

    public function getHead(): ?string
    {
        return $this->head;
    }

    public function setHead(?string $head): self
    {
        $this->head = $head;

        return $this;
    }

    public function getChest(): ?string
    {
        return $this->chest;
    }

    public function setChest(?string $chest): self
    {
        $this->chest = $chest;

        return $this;
    }

    public function getHands(): ?string
    {
        return $this->hands;
    }

    public function setHands(?string $hands): self
    {
        $this->hands = $hands;

        return $this;
    }

    public function getWaist(): ?string
    {
        return $this->waist;
    }

    public function setWaist(?string $waist): self
    {
        $this->waist = $waist;

        return $this;
    }

    public function getLegs(): ?string
    {
        return $this->legs;
    }

    public function setLegs(?string $legs): self
    {
        $this->legs = $legs;

        return $this;
    }

    public function getFeet(): ?string
    {
        return $this->feet;
    }

    public function setFeet(?string $feet): self
    {
        $this->feet = $feet;

        return $this;
    }

    public function getEarring(): ?string
    {
        return $this->earring;
    }

    public function setEarring(?string $earring): self
    {
        $this->earring = $earring;

        return $this;
    }

    public function getNecklace(): ?string
    {
        return $this->necklace;
    }

    public function setNecklace(?string $necklace): self
    {
        $this->necklace = $necklace;

        return $this;
    }

    public function getBracelet(): ?string
    {
        return $this->bracelet;
    }

    public function setBracelet(?string $bracelet): self
    {
        $this->bracelet = $bracelet;

        return $this;
    }

    public function getRing(): ?string
    {
        return $this->ring;
    }

    public function setRing(?string $ring): self
    {
        $this->ring = $ring;

        return $this;
    }

    public function getHwpn2(): ?string
    {
        return $this->hwpn2;
    }

    public function setHwpn2(?string $hwpn2): self
    {
        $this->hwpn2 = $hwpn2;

        return $this;
    }

    public function getUnderArmor(): ?string
    {
        return $this->underArmor;
    }

    public function setUnderArmor(?string $underArmor): self
    {
        $this->underArmor = $underArmor;

        return $this;
    }

    public function getChestHead(): ?string
    {
        return $this->chestHead;
    }

    public function setChestHead(?string $chestHead): self
    {
        $this->chestHead = $chestHead;

        return $this;
    }

    public function getChestHeadLegsFeet(): ?string
    {
        return $this->chestHeadLegsFeet;
    }

    public function setChestHeadLegsFeet(?string $chestHeadLegsFeet): self
    {
        $this->chestHeadLegsFeet = $chestHeadLegsFeet;

        return $this;
    }

    public function getColumn21(): ?string
    {
        return $this->column21;
    }

    public function setColumn21(?string $column21): self
    {
        $this->column21 = $column21;

        return $this;
    }

    public function getLegsFeet(): ?string
    {
        return $this->legsFeet;
    }

    public function setLegsFeet(?string $legsFeet): self
    {
        $this->legsFeet = $legsFeet;

        return $this;
    }

    public function getHeadChestHandsLegsFeet(): ?string
    {
        return $this->headChestHandsLegsFeet;
    }

    public function setHeadChestHandsLegsFeet(?string $headChestHandsLegsFeet): self
    {
        $this->headChestHandsLegsFeet = $headChestHandsLegsFeet;

        return $this;
    }

    public function getChestLegsGloves(): ?string
    {
        return $this->chestLegsGloves;
    }

    public function setChestLegsGloves(?string $chestLegsGloves): self
    {
        $this->chestLegsGloves = $chestLegsGloves;

        return $this;
    }

    public function getChestLegsFeet(): ?string
    {
        return $this->chestLegsFeet;
    }

    public function setChestLegsFeet(?string $chestLegsFeet): self
    {
        $this->chestLegsFeet = $chestLegsFeet;

        return $this;
    }

    public function getMeldParam0(): ?int
    {
        return $this->meldParam0;
    }

    public function setMeldParam0(?int $meldParam0): self
    {
        $this->meldParam0 = $meldParam0;

        return $this;
    }

    public function getMeldParam1(): ?int
    {
        return $this->meldParam1;
    }

    public function setMeldParam1(?int $meldParam1): self
    {
        $this->meldParam1 = $meldParam1;

        return $this;
    }

    public function getMeldParam2(): ?int
    {
        return $this->meldParam2;
    }

    public function setMeldParam2(?int $meldParam2): self
    {
        $this->meldParam2 = $meldParam2;

        return $this;
    }

    public function getMeldParam3(): ?int
    {
        return $this->meldParam3;
    }

    public function setMeldParam3(?int $meldParam3): self
    {
        $this->meldParam3 = $meldParam3;

        return $this;
    }

    public function getMeldParam4(): ?int
    {
        return $this->meldParam4;
    }

    public function setMeldParam4(?int $meldParam4): self
    {
        $this->meldParam4 = $meldParam4;

        return $this;
    }

    public function getMeldParam5(): ?int
    {
        return $this->meldParam5;
    }

    public function setMeldParam5(?int $meldParam5): self
    {
        $this->meldParam5 = $meldParam5;

        return $this;
    }

    public function getMeldParam6(): ?int
    {
        return $this->meldParam6;
    }

    public function setMeldParam6(?int $meldParam6): self
    {
        $this->meldParam6 = $meldParam6;

        return $this;
    }

    public function getMeldParam7(): ?int
    {
        return $this->meldParam7;
    }

    public function setMeldParam7(?int $meldParam7): self
    {
        $this->meldParam7 = $meldParam7;

        return $this;
    }

    public function getMeldParam8(): ?int
    {
        return $this->meldParam8;
    }

    public function setMeldParam8(?int $meldParam8): self
    {
        $this->meldParam8 = $meldParam8;

        return $this;
    }

    public function getMeldParam9(): ?int
    {
        return $this->meldParam9;
    }

    public function setMeldParam9(?int $meldParam9): self
    {
        $this->meldParam9 = $meldParam9;

        return $this;
    }

    public function getMeldParam10(): ?int
    {
        return $this->meldParam10;
    }

    public function setMeldParam10(?int $meldParam10): self
    {
        $this->meldParam10 = $meldParam10;

        return $this;
    }

    public function getMeldParam11(): ?int
    {
        return $this->meldParam11;
    }

    public function setMeldParam11(?int $meldParam11): self
    {
        $this->meldParam11 = $meldParam11;

        return $this;
    }

    public function getMeldParam12(): ?int
    {
        return $this->meldParam12;
    }

    public function setMeldParam12(?int $meldParam12): self
    {
        $this->meldParam12 = $meldParam12;

        return $this;
    }

    public function getColumn39(): ?bool
    {
        return $this->column39;
    }

    public function setColumn39(?bool $column39): self
    {
        $this->column39 = $column39;

        return $this;
    }
}
