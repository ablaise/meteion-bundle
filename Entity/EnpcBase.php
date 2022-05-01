<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnpcBase.
 *
 * @ORM\Table(name="enpc_base", indexes={@ORM\Index(name="idx_c27b674b6c8ee36", columns={"model_chara"}), @ORM\Index(name="idx_c27b674c67fc9be", columns={"dye_right_ring"}), @ORM\Index(name="idx_c27b674ccae5efb", columns={"dye_off_hand"}), @ORM\Index(name="idx_c27b674b5baa9f0", columns={"dye_feet"}), @ORM\Index(name="idx_c27b6743099ced3", columns={"dye_main_hand"}), @ORM\Index(name="idx_c27b6747655beb5", columns={"dye_legs"}), @ORM\Index(name="idx_c27b6742de3f251", columns={"dye_wrists"}), @ORM\Index(name="idx_c27b6745f133287", columns={"dye_left_ring"}), @ORM\Index(name="idx_c27b674d0c35338", columns={"dye_hands"}), @ORM\Index(name="idx_c27b674ab5c2b6c", columns={"dye_neck"}), @ORM\Index(name="idx_c27b674ad2f07ff", columns={"npc_equip"}), @ORM\Index(name="idx_c27b674da6fbbaf", columns={"race"}), @ORM\Index(name="idx_c27b674643b3b90", columns={"balloon"}), @ORM\Index(name="idx_c27b6742cbe0ba3", columns={"dye_head"}), @ORM\Index(name="idx_c27b67450e5f68d", columns={"dye_body"}), @ORM\Index(name="idx_c27b6742653b558", columns={"tribe"}), @ORM\Index(name="idx_c27b6743be1bff7", columns={"dye_ears"})})
 * @ORM\Entity
 */
class EnpcBase
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enpc_base_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="event_handler", type="bigint", nullable=true)
     */
    private $eventHandler;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="important", type="boolean", nullable=true)
     */
    private $important;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_0", type="integer", nullable=true)
     */
    private $enpcData0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_1", type="integer", nullable=true)
     */
    private $enpcData1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_2", type="integer", nullable=true)
     */
    private $enpcData2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_3", type="integer", nullable=true)
     */
    private $enpcData3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_4", type="integer", nullable=true)
     */
    private $enpcData4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_5", type="integer", nullable=true)
     */
    private $enpcData5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_6", type="integer", nullable=true)
     */
    private $enpcData6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_7", type="integer", nullable=true)
     */
    private $enpcData7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_8", type="integer", nullable=true)
     */
    private $enpcData8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_9", type="integer", nullable=true)
     */
    private $enpcData9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_10", type="integer", nullable=true)
     */
    private $enpcData10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_11", type="integer", nullable=true)
     */
    private $enpcData11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_12", type="integer", nullable=true)
     */
    private $enpcData12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_13", type="integer", nullable=true)
     */
    private $enpcData13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_14", type="integer", nullable=true)
     */
    private $enpcData14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_15", type="integer", nullable=true)
     */
    private $enpcData15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_16", type="integer", nullable=true)
     */
    private $enpcData16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_17", type="integer", nullable=true)
     */
    private $enpcData17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_18", type="integer", nullable=true)
     */
    private $enpcData18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_19", type="integer", nullable=true)
     */
    private $enpcData19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_20", type="integer", nullable=true)
     */
    private $enpcData20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_21", type="integer", nullable=true)
     */
    private $enpcData21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_22", type="integer", nullable=true)
     */
    private $enpcData22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_23", type="integer", nullable=true)
     */
    private $enpcData23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_24", type="integer", nullable=true)
     */
    private $enpcData24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_25", type="integer", nullable=true)
     */
    private $enpcData25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_26", type="integer", nullable=true)
     */
    private $enpcData26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_27", type="integer", nullable=true)
     */
    private $enpcData27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_28", type="integer", nullable=true)
     */
    private $enpcData28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_29", type="integer", nullable=true)
     */
    private $enpcData29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_30", type="integer", nullable=true)
     */
    private $enpcData30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_data_31", type="integer", nullable=true)
     */
    private $enpcData31;

    /**
     * @var string|null
     *
     * @ORM\Column(name="scale", type="string", length=255, nullable=true)
     */
    private $scale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gender", type="integer", nullable=true)
     */
    private $gender;

    /**
     * @var int|null
     *
     * @ORM\Column(name="body_type", type="integer", nullable=true)
     */
    private $bodyType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="height", type="integer", nullable=true)
     */
    private $height;

    /**
     * @var int|null
     *
     * @ORM\Column(name="face", type="integer", nullable=true)
     */
    private $face;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hair_style", type="integer", nullable=true)
     */
    private $hairStyle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hair_highlight", type="integer", nullable=true)
     */
    private $hairHighlight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="skin_color", type="integer", nullable=true)
     */
    private $skinColor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="eye_heterochromia", type="integer", nullable=true)
     */
    private $eyeHeterochromia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hair_color", type="integer", nullable=true)
     */
    private $hairColor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hair_highlight_color", type="integer", nullable=true)
     */
    private $hairHighlightColor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facial_feature", type="integer", nullable=true)
     */
    private $facialFeature;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facial_feature_color", type="integer", nullable=true)
     */
    private $facialFeatureColor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="eyebrows", type="integer", nullable=true)
     */
    private $eyebrows;

    /**
     * @var int|null
     *
     * @ORM\Column(name="eye_color", type="integer", nullable=true)
     */
    private $eyeColor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="eye_shape", type="integer", nullable=true)
     */
    private $eyeShape;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nose", type="integer", nullable=true)
     */
    private $nose;

    /**
     * @var int|null
     *
     * @ORM\Column(name="jaw", type="integer", nullable=true)
     */
    private $jaw;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mouth", type="integer", nullable=true)
     */
    private $mouth;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lip_color", type="integer", nullable=true)
     */
    private $lipColor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bust_or_tone1", type="integer", nullable=true)
     */
    private $bustOrTone1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="extra_feature1", type="integer", nullable=true)
     */
    private $extraFeature1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="extra_feature2or_bust", type="integer", nullable=true)
     */
    private $extraFeature2orBust;

    /**
     * @var int|null
     *
     * @ORM\Column(name="face_paint", type="integer", nullable=true)
     */
    private $facePaint;

    /**
     * @var int|null
     *
     * @ORM\Column(name="face_paint_color", type="integer", nullable=true)
     */
    private $facePaintColor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_63", type="integer", nullable=true)
     */
    private $column63;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior", type="integer", nullable=true)
     */
    private $behavior;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_main_hand", type="string", length=255, nullable=true)
     */
    private $modelMainHand;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_off_hand", type="string", length=255, nullable=true)
     */
    private $modelOffHand;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_head", type="bigint", nullable=true)
     */
    private $modelHead;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visor", type="boolean", nullable=true)
     */
    private $visor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_body", type="bigint", nullable=true)
     */
    private $modelBody;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_hands", type="bigint", nullable=true)
     */
    private $modelHands;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_legs", type="bigint", nullable=true)
     */
    private $modelLegs;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_feet", type="bigint", nullable=true)
     */
    private $modelFeet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_ears", type="bigint", nullable=true)
     */
    private $modelEars;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_neck", type="bigint", nullable=true)
     */
    private $modelNeck;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_wrists", type="bigint", nullable=true)
     */
    private $modelWrists;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_left_ring", type="bigint", nullable=true)
     */
    private $modelLeftRing;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_right_ring", type="bigint", nullable=true)
     */
    private $modelRightRing;

    /**
     * @var int|null
     *
     * @ORM\Column(name="invisibility", type="integer", nullable=true)
     */
    private $invisibility;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="not_rewrite_height", type="boolean", nullable=true)
     */
    private $notRewriteHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="default_balloon", type="integer", nullable=true)
     */
    private $defaultBalloon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_95", type="integer", nullable=true)
     */
    private $column95;

    /**
     * @var Balloon
     *
     * @ORM\ManyToOne(targetEntity="Balloon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="balloon", referencedColumnName="pk")
     * })
     */
    private $balloon;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_right_ring", referencedColumnName="pk")
     * })
     */
    private $dyeRightRing;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_left_ring", referencedColumnName="pk")
     * })
     */
    private $dyeLeftRing;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_wrists", referencedColumnName="pk")
     * })
     */
    private $dyeWrists;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_neck", referencedColumnName="pk")
     * })
     */
    private $dyeNeck;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_ears", referencedColumnName="pk")
     * })
     */
    private $dyeEars;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_feet", referencedColumnName="pk")
     * })
     */
    private $dyeFeet;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_legs", referencedColumnName="pk")
     * })
     */
    private $dyeLegs;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_hands", referencedColumnName="pk")
     * })
     */
    private $dyeHands;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_body", referencedColumnName="pk")
     * })
     */
    private $dyeBody;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_head", referencedColumnName="pk")
     * })
     */
    private $dyeHead;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_off_hand", referencedColumnName="pk")
     * })
     */
    private $dyeOffHand;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_main_hand", referencedColumnName="pk")
     * })
     */
    private $dyeMainHand;

    /**
     * @var NpcEquip
     *
     * @ORM\ManyToOne(targetEntity="NpcEquip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="npc_equip", referencedColumnName="pk")
     * })
     */
    private $npcEquip;

    /**
     * @var Tribe
     *
     * @ORM\ManyToOne(targetEntity="Tribe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tribe", referencedColumnName="pk")
     * })
     */
    private $tribe;

    /**
     * @var Race
     *
     * @ORM\ManyToOne(targetEntity="Race")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="race", referencedColumnName="pk")
     * })
     */
    private $race;

    /**
     * @var ModelChara
     *
     * @ORM\ManyToOne(targetEntity="ModelChara")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="model_chara", referencedColumnName="pk")
     * })
     */
    private $modelChara;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getEventHandler(): ?string
    {
        return $this->eventHandler;
    }

    public function setEventHandler(?string $eventHandler): self
    {
        $this->eventHandler = $eventHandler;

        return $this;
    }

    public function getImportant(): ?bool
    {
        return $this->important;
    }

    public function setImportant(?bool $important): self
    {
        $this->important = $important;

        return $this;
    }

    public function getEnpcData0(): ?int
    {
        return $this->enpcData0;
    }

    public function setEnpcData0(?int $enpcData0): self
    {
        $this->enpcData0 = $enpcData0;

        return $this;
    }

    public function getEnpcData1(): ?int
    {
        return $this->enpcData1;
    }

    public function setEnpcData1(?int $enpcData1): self
    {
        $this->enpcData1 = $enpcData1;

        return $this;
    }

    public function getEnpcData2(): ?int
    {
        return $this->enpcData2;
    }

    public function setEnpcData2(?int $enpcData2): self
    {
        $this->enpcData2 = $enpcData2;

        return $this;
    }

    public function getEnpcData3(): ?int
    {
        return $this->enpcData3;
    }

    public function setEnpcData3(?int $enpcData3): self
    {
        $this->enpcData3 = $enpcData3;

        return $this;
    }

    public function getEnpcData4(): ?int
    {
        return $this->enpcData4;
    }

    public function setEnpcData4(?int $enpcData4): self
    {
        $this->enpcData4 = $enpcData4;

        return $this;
    }

    public function getEnpcData5(): ?int
    {
        return $this->enpcData5;
    }

    public function setEnpcData5(?int $enpcData5): self
    {
        $this->enpcData5 = $enpcData5;

        return $this;
    }

    public function getEnpcData6(): ?int
    {
        return $this->enpcData6;
    }

    public function setEnpcData6(?int $enpcData6): self
    {
        $this->enpcData6 = $enpcData6;

        return $this;
    }

    public function getEnpcData7(): ?int
    {
        return $this->enpcData7;
    }

    public function setEnpcData7(?int $enpcData7): self
    {
        $this->enpcData7 = $enpcData7;

        return $this;
    }

    public function getEnpcData8(): ?int
    {
        return $this->enpcData8;
    }

    public function setEnpcData8(?int $enpcData8): self
    {
        $this->enpcData8 = $enpcData8;

        return $this;
    }

    public function getEnpcData9(): ?int
    {
        return $this->enpcData9;
    }

    public function setEnpcData9(?int $enpcData9): self
    {
        $this->enpcData9 = $enpcData9;

        return $this;
    }

    public function getEnpcData10(): ?int
    {
        return $this->enpcData10;
    }

    public function setEnpcData10(?int $enpcData10): self
    {
        $this->enpcData10 = $enpcData10;

        return $this;
    }

    public function getEnpcData11(): ?int
    {
        return $this->enpcData11;
    }

    public function setEnpcData11(?int $enpcData11): self
    {
        $this->enpcData11 = $enpcData11;

        return $this;
    }

    public function getEnpcData12(): ?int
    {
        return $this->enpcData12;
    }

    public function setEnpcData12(?int $enpcData12): self
    {
        $this->enpcData12 = $enpcData12;

        return $this;
    }

    public function getEnpcData13(): ?int
    {
        return $this->enpcData13;
    }

    public function setEnpcData13(?int $enpcData13): self
    {
        $this->enpcData13 = $enpcData13;

        return $this;
    }

    public function getEnpcData14(): ?int
    {
        return $this->enpcData14;
    }

    public function setEnpcData14(?int $enpcData14): self
    {
        $this->enpcData14 = $enpcData14;

        return $this;
    }

    public function getEnpcData15(): ?int
    {
        return $this->enpcData15;
    }

    public function setEnpcData15(?int $enpcData15): self
    {
        $this->enpcData15 = $enpcData15;

        return $this;
    }

    public function getEnpcData16(): ?int
    {
        return $this->enpcData16;
    }

    public function setEnpcData16(?int $enpcData16): self
    {
        $this->enpcData16 = $enpcData16;

        return $this;
    }

    public function getEnpcData17(): ?int
    {
        return $this->enpcData17;
    }

    public function setEnpcData17(?int $enpcData17): self
    {
        $this->enpcData17 = $enpcData17;

        return $this;
    }

    public function getEnpcData18(): ?int
    {
        return $this->enpcData18;
    }

    public function setEnpcData18(?int $enpcData18): self
    {
        $this->enpcData18 = $enpcData18;

        return $this;
    }

    public function getEnpcData19(): ?int
    {
        return $this->enpcData19;
    }

    public function setEnpcData19(?int $enpcData19): self
    {
        $this->enpcData19 = $enpcData19;

        return $this;
    }

    public function getEnpcData20(): ?int
    {
        return $this->enpcData20;
    }

    public function setEnpcData20(?int $enpcData20): self
    {
        $this->enpcData20 = $enpcData20;

        return $this;
    }

    public function getEnpcData21(): ?int
    {
        return $this->enpcData21;
    }

    public function setEnpcData21(?int $enpcData21): self
    {
        $this->enpcData21 = $enpcData21;

        return $this;
    }

    public function getEnpcData22(): ?int
    {
        return $this->enpcData22;
    }

    public function setEnpcData22(?int $enpcData22): self
    {
        $this->enpcData22 = $enpcData22;

        return $this;
    }

    public function getEnpcData23(): ?int
    {
        return $this->enpcData23;
    }

    public function setEnpcData23(?int $enpcData23): self
    {
        $this->enpcData23 = $enpcData23;

        return $this;
    }

    public function getEnpcData24(): ?int
    {
        return $this->enpcData24;
    }

    public function setEnpcData24(?int $enpcData24): self
    {
        $this->enpcData24 = $enpcData24;

        return $this;
    }

    public function getEnpcData25(): ?int
    {
        return $this->enpcData25;
    }

    public function setEnpcData25(?int $enpcData25): self
    {
        $this->enpcData25 = $enpcData25;

        return $this;
    }

    public function getEnpcData26(): ?int
    {
        return $this->enpcData26;
    }

    public function setEnpcData26(?int $enpcData26): self
    {
        $this->enpcData26 = $enpcData26;

        return $this;
    }

    public function getEnpcData27(): ?int
    {
        return $this->enpcData27;
    }

    public function setEnpcData27(?int $enpcData27): self
    {
        $this->enpcData27 = $enpcData27;

        return $this;
    }

    public function getEnpcData28(): ?int
    {
        return $this->enpcData28;
    }

    public function setEnpcData28(?int $enpcData28): self
    {
        $this->enpcData28 = $enpcData28;

        return $this;
    }

    public function getEnpcData29(): ?int
    {
        return $this->enpcData29;
    }

    public function setEnpcData29(?int $enpcData29): self
    {
        $this->enpcData29 = $enpcData29;

        return $this;
    }

    public function getEnpcData30(): ?int
    {
        return $this->enpcData30;
    }

    public function setEnpcData30(?int $enpcData30): self
    {
        $this->enpcData30 = $enpcData30;

        return $this;
    }

    public function getEnpcData31(): ?int
    {
        return $this->enpcData31;
    }

    public function setEnpcData31(?int $enpcData31): self
    {
        $this->enpcData31 = $enpcData31;

        return $this;
    }

    public function getScale(): ?string
    {
        return $this->scale;
    }

    public function setScale(?string $scale): self
    {
        $this->scale = $scale;

        return $this;
    }

    public function getGender(): ?int
    {
        return $this->gender;
    }

    public function setGender(?int $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getBodyType(): ?int
    {
        return $this->bodyType;
    }

    public function setBodyType(?int $bodyType): self
    {
        $this->bodyType = $bodyType;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(?int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getFace(): ?int
    {
        return $this->face;
    }

    public function setFace(?int $face): self
    {
        $this->face = $face;

        return $this;
    }

    public function getHairStyle(): ?int
    {
        return $this->hairStyle;
    }

    public function setHairStyle(?int $hairStyle): self
    {
        $this->hairStyle = $hairStyle;

        return $this;
    }

    public function getHairHighlight(): ?int
    {
        return $this->hairHighlight;
    }

    public function setHairHighlight(?int $hairHighlight): self
    {
        $this->hairHighlight = $hairHighlight;

        return $this;
    }

    public function getSkinColor(): ?int
    {
        return $this->skinColor;
    }

    public function setSkinColor(?int $skinColor): self
    {
        $this->skinColor = $skinColor;

        return $this;
    }

    public function getEyeHeterochromia(): ?int
    {
        return $this->eyeHeterochromia;
    }

    public function setEyeHeterochromia(?int $eyeHeterochromia): self
    {
        $this->eyeHeterochromia = $eyeHeterochromia;

        return $this;
    }

    public function getHairColor(): ?int
    {
        return $this->hairColor;
    }

    public function setHairColor(?int $hairColor): self
    {
        $this->hairColor = $hairColor;

        return $this;
    }

    public function getHairHighlightColor(): ?int
    {
        return $this->hairHighlightColor;
    }

    public function setHairHighlightColor(?int $hairHighlightColor): self
    {
        $this->hairHighlightColor = $hairHighlightColor;

        return $this;
    }

    public function getFacialFeature(): ?int
    {
        return $this->facialFeature;
    }

    public function setFacialFeature(?int $facialFeature): self
    {
        $this->facialFeature = $facialFeature;

        return $this;
    }

    public function getFacialFeatureColor(): ?int
    {
        return $this->facialFeatureColor;
    }

    public function setFacialFeatureColor(?int $facialFeatureColor): self
    {
        $this->facialFeatureColor = $facialFeatureColor;

        return $this;
    }

    public function getEyebrows(): ?int
    {
        return $this->eyebrows;
    }

    public function setEyebrows(?int $eyebrows): self
    {
        $this->eyebrows = $eyebrows;

        return $this;
    }

    public function getEyeColor(): ?int
    {
        return $this->eyeColor;
    }

    public function setEyeColor(?int $eyeColor): self
    {
        $this->eyeColor = $eyeColor;

        return $this;
    }

    public function getEyeShape(): ?int
    {
        return $this->eyeShape;
    }

    public function setEyeShape(?int $eyeShape): self
    {
        $this->eyeShape = $eyeShape;

        return $this;
    }

    public function getNose(): ?int
    {
        return $this->nose;
    }

    public function setNose(?int $nose): self
    {
        $this->nose = $nose;

        return $this;
    }

    public function getJaw(): ?int
    {
        return $this->jaw;
    }

    public function setJaw(?int $jaw): self
    {
        $this->jaw = $jaw;

        return $this;
    }

    public function getMouth(): ?int
    {
        return $this->mouth;
    }

    public function setMouth(?int $mouth): self
    {
        $this->mouth = $mouth;

        return $this;
    }

    public function getLipColor(): ?int
    {
        return $this->lipColor;
    }

    public function setLipColor(?int $lipColor): self
    {
        $this->lipColor = $lipColor;

        return $this;
    }

    public function getBustOrTone1(): ?int
    {
        return $this->bustOrTone1;
    }

    public function setBustOrTone1(?int $bustOrTone1): self
    {
        $this->bustOrTone1 = $bustOrTone1;

        return $this;
    }

    public function getExtraFeature1(): ?int
    {
        return $this->extraFeature1;
    }

    public function setExtraFeature1(?int $extraFeature1): self
    {
        $this->extraFeature1 = $extraFeature1;

        return $this;
    }

    public function getExtraFeature2orBust(): ?int
    {
        return $this->extraFeature2orBust;
    }

    public function setExtraFeature2orBust(?int $extraFeature2orBust): self
    {
        $this->extraFeature2orBust = $extraFeature2orBust;

        return $this;
    }

    public function getFacePaint(): ?int
    {
        return $this->facePaint;
    }

    public function setFacePaint(?int $facePaint): self
    {
        $this->facePaint = $facePaint;

        return $this;
    }

    public function getFacePaintColor(): ?int
    {
        return $this->facePaintColor;
    }

    public function setFacePaintColor(?int $facePaintColor): self
    {
        $this->facePaintColor = $facePaintColor;

        return $this;
    }

    public function getColumn63(): ?int
    {
        return $this->column63;
    }

    public function setColumn63(?int $column63): self
    {
        $this->column63 = $column63;

        return $this;
    }

    public function getBehavior(): ?int
    {
        return $this->behavior;
    }

    public function setBehavior(?int $behavior): self
    {
        $this->behavior = $behavior;

        return $this;
    }

    public function getModelMainHand(): ?string
    {
        return $this->modelMainHand;
    }

    public function setModelMainHand(?string $modelMainHand): self
    {
        $this->modelMainHand = $modelMainHand;

        return $this;
    }

    public function getModelOffHand(): ?string
    {
        return $this->modelOffHand;
    }

    public function setModelOffHand(?string $modelOffHand): self
    {
        $this->modelOffHand = $modelOffHand;

        return $this;
    }

    public function getModelHead(): ?string
    {
        return $this->modelHead;
    }

    public function setModelHead(?string $modelHead): self
    {
        $this->modelHead = $modelHead;

        return $this;
    }

    public function getVisor(): ?bool
    {
        return $this->visor;
    }

    public function setVisor(?bool $visor): self
    {
        $this->visor = $visor;

        return $this;
    }

    public function getModelBody(): ?string
    {
        return $this->modelBody;
    }

    public function setModelBody(?string $modelBody): self
    {
        $this->modelBody = $modelBody;

        return $this;
    }

    public function getModelHands(): ?string
    {
        return $this->modelHands;
    }

    public function setModelHands(?string $modelHands): self
    {
        $this->modelHands = $modelHands;

        return $this;
    }

    public function getModelLegs(): ?string
    {
        return $this->modelLegs;
    }

    public function setModelLegs(?string $modelLegs): self
    {
        $this->modelLegs = $modelLegs;

        return $this;
    }

    public function getModelFeet(): ?string
    {
        return $this->modelFeet;
    }

    public function setModelFeet(?string $modelFeet): self
    {
        $this->modelFeet = $modelFeet;

        return $this;
    }

    public function getModelEars(): ?string
    {
        return $this->modelEars;
    }

    public function setModelEars(?string $modelEars): self
    {
        $this->modelEars = $modelEars;

        return $this;
    }

    public function getModelNeck(): ?string
    {
        return $this->modelNeck;
    }

    public function setModelNeck(?string $modelNeck): self
    {
        $this->modelNeck = $modelNeck;

        return $this;
    }

    public function getModelWrists(): ?string
    {
        return $this->modelWrists;
    }

    public function setModelWrists(?string $modelWrists): self
    {
        $this->modelWrists = $modelWrists;

        return $this;
    }

    public function getModelLeftRing(): ?string
    {
        return $this->modelLeftRing;
    }

    public function setModelLeftRing(?string $modelLeftRing): self
    {
        $this->modelLeftRing = $modelLeftRing;

        return $this;
    }

    public function getModelRightRing(): ?string
    {
        return $this->modelRightRing;
    }

    public function setModelRightRing(?string $modelRightRing): self
    {
        $this->modelRightRing = $modelRightRing;

        return $this;
    }

    public function getInvisibility(): ?int
    {
        return $this->invisibility;
    }

    public function setInvisibility(?int $invisibility): self
    {
        $this->invisibility = $invisibility;

        return $this;
    }

    public function getNotRewriteHeight(): ?bool
    {
        return $this->notRewriteHeight;
    }

    public function setNotRewriteHeight(?bool $notRewriteHeight): self
    {
        $this->notRewriteHeight = $notRewriteHeight;

        return $this;
    }

    public function getDefaultBalloon(): ?int
    {
        return $this->defaultBalloon;
    }

    public function setDefaultBalloon(?int $defaultBalloon): self
    {
        $this->defaultBalloon = $defaultBalloon;

        return $this;
    }

    public function getColumn95(): ?int
    {
        return $this->column95;
    }

    public function setColumn95(?int $column95): self
    {
        $this->column95 = $column95;

        return $this;
    }

    public function getBalloon(): ?Balloon
    {
        return $this->balloon;
    }

    public function setBalloon(?Balloon $balloon): self
    {
        $this->balloon = $balloon;

        return $this;
    }

    public function getDyeRightRing(): ?Stain
    {
        return $this->dyeRightRing;
    }

    public function setDyeRightRing(?Stain $dyeRightRing): self
    {
        $this->dyeRightRing = $dyeRightRing;

        return $this;
    }

    public function getDyeLeftRing(): ?Stain
    {
        return $this->dyeLeftRing;
    }

    public function setDyeLeftRing(?Stain $dyeLeftRing): self
    {
        $this->dyeLeftRing = $dyeLeftRing;

        return $this;
    }

    public function getDyeWrists(): ?Stain
    {
        return $this->dyeWrists;
    }

    public function setDyeWrists(?Stain $dyeWrists): self
    {
        $this->dyeWrists = $dyeWrists;

        return $this;
    }

    public function getDyeNeck(): ?Stain
    {
        return $this->dyeNeck;
    }

    public function setDyeNeck(?Stain $dyeNeck): self
    {
        $this->dyeNeck = $dyeNeck;

        return $this;
    }

    public function getDyeEars(): ?Stain
    {
        return $this->dyeEars;
    }

    public function setDyeEars(?Stain $dyeEars): self
    {
        $this->dyeEars = $dyeEars;

        return $this;
    }

    public function getDyeFeet(): ?Stain
    {
        return $this->dyeFeet;
    }

    public function setDyeFeet(?Stain $dyeFeet): self
    {
        $this->dyeFeet = $dyeFeet;

        return $this;
    }

    public function getDyeLegs(): ?Stain
    {
        return $this->dyeLegs;
    }

    public function setDyeLegs(?Stain $dyeLegs): self
    {
        $this->dyeLegs = $dyeLegs;

        return $this;
    }

    public function getDyeHands(): ?Stain
    {
        return $this->dyeHands;
    }

    public function setDyeHands(?Stain $dyeHands): self
    {
        $this->dyeHands = $dyeHands;

        return $this;
    }

    public function getDyeBody(): ?Stain
    {
        return $this->dyeBody;
    }

    public function setDyeBody(?Stain $dyeBody): self
    {
        $this->dyeBody = $dyeBody;

        return $this;
    }

    public function getDyeHead(): ?Stain
    {
        return $this->dyeHead;
    }

    public function setDyeHead(?Stain $dyeHead): self
    {
        $this->dyeHead = $dyeHead;

        return $this;
    }

    public function getDyeOffHand(): ?Stain
    {
        return $this->dyeOffHand;
    }

    public function setDyeOffHand(?Stain $dyeOffHand): self
    {
        $this->dyeOffHand = $dyeOffHand;

        return $this;
    }

    public function getDyeMainHand(): ?Stain
    {
        return $this->dyeMainHand;
    }

    public function setDyeMainHand(?Stain $dyeMainHand): self
    {
        $this->dyeMainHand = $dyeMainHand;

        return $this;
    }

    public function getNpcEquip(): ?NpcEquip
    {
        return $this->npcEquip;
    }

    public function setNpcEquip(?NpcEquip $npcEquip): self
    {
        $this->npcEquip = $npcEquip;

        return $this;
    }

    public function getTribe(): ?Tribe
    {
        return $this->tribe;
    }

    public function setTribe(?Tribe $tribe): self
    {
        $this->tribe = $tribe;

        return $this;
    }

    public function getRace(): ?Race
    {
        return $this->race;
    }

    public function setRace(?Race $race): self
    {
        $this->race = $race;

        return $this;
    }

    public function getModelChara(): ?ModelChara
    {
        return $this->modelChara;
    }

    public function setModelChara(?ModelChara $modelChara): self
    {
        $this->modelChara = $modelChara;

        return $this;
    }
}
