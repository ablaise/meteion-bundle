<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Snipe.
 *
 * @ORM\Table(name="snipe")
 * @ORM\Entity
 */
class Snipe
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="snipe_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_target_marker", type="bigint", nullable=true)
     */
    private $lgbTargetMarker;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="bigint", nullable=true)
     */
    private $column2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_3", type="boolean", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="integer", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="integer", nullable=true)
     */
    private $column5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="integer", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="integer", nullable=true)
     */
    private $column7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="integer", nullable=true)
     */
    private $column8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_9", type="bigint", nullable=true)
     */
    private $column9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_10", type="integer", nullable=true)
     */
    private $column10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_11", type="integer", nullable=true)
     */
    private $column11;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vfx_fire", type="string", length=255, nullable=true)
     */
    private $vfxFire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vfx_hit", type="string", length=255, nullable=true)
     */
    private $vfxHit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vfx_miss", type="string", length=255, nullable=true)
     */
    private $vfxMiss;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vfx_additional", type="string", length=255, nullable=true)
     */
    private $vfxAdditional;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_16", type="bigint", nullable=true)
     */
    private $column16;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_17", type="boolean", nullable=true)
     */
    private $column17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_npc_0_0", type="bigint", nullable=true)
     */
    private $lgbEventNpc00;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_npc_0_1", type="bigint", nullable=true)
     */
    private $lgbEventNpc01;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_npc_0_2", type="bigint", nullable=true)
     */
    private $lgbEventNpc02;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_npc_0_3", type="bigint", nullable=true)
     */
    private $lgbEventNpc03;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_npc_0_4", type="bigint", nullable=true)
     */
    private $lgbEventNpc04;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_npc_0_5", type="bigint", nullable=true)
     */
    private $lgbEventNpc05;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_npc_0_6", type="bigint", nullable=true)
     */
    private $lgbEventNpc06;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_npc_0_7", type="bigint", nullable=true)
     */
    private $lgbEventNpc07;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_26", type="bigint", nullable=true)
     */
    private $column26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_27", type="bigint", nullable=true)
     */
    private $column27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_28", type="bigint", nullable=true)
     */
    private $column28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_29", type="bigint", nullable=true)
     */
    private $column29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_30", type="bigint", nullable=true)
     */
    private $column30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_31", type="bigint", nullable=true)
     */
    private $column31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_32", type="bigint", nullable=true)
     */
    private $column32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_33", type="bigint", nullable=true)
     */
    private $column33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_34", type="bigint", nullable=true)
     */
    private $column34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_35", type="bigint", nullable=true)
     */
    private $column35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_36", type="bigint", nullable=true)
     */
    private $column36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_37", type="bigint", nullable=true)
     */
    private $column37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_38", type="bigint", nullable=true)
     */
    private $column38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_39", type="bigint", nullable=true)
     */
    private $column39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_40", type="bigint", nullable=true)
     */
    private $column40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_41", type="bigint", nullable=true)
     */
    private $column41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_42", type="integer", nullable=true)
     */
    private $column42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_43", type="integer", nullable=true)
     */
    private $column43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_44", type="integer", nullable=true)
     */
    private $column44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_45", type="integer", nullable=true)
     */
    private $column45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_46", type="integer", nullable=true)
     */
    private $column46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_47", type="integer", nullable=true)
     */
    private $column47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_48", type="integer", nullable=true)
     */
    private $column48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_49", type="integer", nullable=true)
     */
    private $column49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_50", type="bigint", nullable=true)
     */
    private $column50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_51", type="bigint", nullable=true)
     */
    private $column51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_52", type="bigint", nullable=true)
     */
    private $column52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_53", type="bigint", nullable=true)
     */
    private $column53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_54", type="bigint", nullable=true)
     */
    private $column54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_55", type="bigint", nullable=true)
     */
    private $column55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_56", type="bigint", nullable=true)
     */
    private $column56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_57", type="bigint", nullable=true)
     */
    private $column57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_58", type="bigint", nullable=true)
     */
    private $column58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_59", type="bigint", nullable=true)
     */
    private $column59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_60", type="bigint", nullable=true)
     */
    private $column60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_61", type="bigint", nullable=true)
     */
    private $column61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_62", type="bigint", nullable=true)
     */
    private $column62;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_63", type="bigint", nullable=true)
     */
    private $column63;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_64", type="bigint", nullable=true)
     */
    private $column64;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_65", type="bigint", nullable=true)
     */
    private $column65;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_66", type="integer", nullable=true)
     */
    private $column66;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_67", type="integer", nullable=true)
     */
    private $column67;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_68", type="integer", nullable=true)
     */
    private $column68;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_69", type="integer", nullable=true)
     */
    private $column69;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_70", type="integer", nullable=true)
     */
    private $column70;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_71", type="integer", nullable=true)
     */
    private $column71;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_72", type="integer", nullable=true)
     */
    private $column72;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_73", type="integer", nullable=true)
     */
    private $column73;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_npc_1_0", type="bigint", nullable=true)
     */
    private $lgbEventNpc10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_npc_1_1", type="bigint", nullable=true)
     */
    private $lgbEventNpc11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_npc_1_2", type="bigint", nullable=true)
     */
    private $lgbEventNpc12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_npc_1_3", type="bigint", nullable=true)
     */
    private $lgbEventNpc13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_npc_1_4", type="bigint", nullable=true)
     */
    private $lgbEventNpc14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_npc_1_5", type="bigint", nullable=true)
     */
    private $lgbEventNpc15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_npc_1_6", type="bigint", nullable=true)
     */
    private $lgbEventNpc16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_npc_1_7", type="bigint", nullable=true)
     */
    private $lgbEventNpc17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_82", type="bigint", nullable=true)
     */
    private $column82;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_83", type="bigint", nullable=true)
     */
    private $column83;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_84", type="bigint", nullable=true)
     */
    private $column84;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_85", type="bigint", nullable=true)
     */
    private $column85;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_86", type="integer", nullable=true)
     */
    private $column86;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_87", type="integer", nullable=true)
     */
    private $column87;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_88", type="integer", nullable=true)
     */
    private $column88;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_89", type="integer", nullable=true)
     */
    private $column89;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_90", type="bigint", nullable=true)
     */
    private $column90;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_91", type="bigint", nullable=true)
     */
    private $column91;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_92", type="bigint", nullable=true)
     */
    private $column92;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_93", type="bigint", nullable=true)
     */
    private $column93;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objective_0", type="string", length=255, nullable=true)
     */
    private $objective0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hint_0", type="string", length=255, nullable=true)
     */
    private $hint0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objective_1", type="string", length=255, nullable=true)
     */
    private $objective1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hint_1", type="string", length=255, nullable=true)
     */
    private $hint1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_98", type="string", length=255, nullable=true)
     */
    private $column98;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_99", type="string", length=255, nullable=true)
     */
    private $column99;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_100", type="string", length=255, nullable=true)
     */
    private $column100;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_101", type="string", length=255, nullable=true)
     */
    private $column101;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_102", type="string", length=255, nullable=true)
     */
    private $column102;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_103", type="string", length=255, nullable=true)
     */
    private $column103;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_104", type="string", length=255, nullable=true)
     */
    private $column104;

    /**
     * @var string|null
     *
     * @ORM\Column(name="action_text", type="string", length=255, nullable=true)
     */
    private $actionText;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_106", type="integer", nullable=true)
     */
    private $column106;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_107", type="integer", nullable=true)
     */
    private $column107;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getLgbTargetMarker(): ?string
    {
        return $this->lgbTargetMarker;
    }

    public function setLgbTargetMarker(?string $lgbTargetMarker): self
    {
        $this->lgbTargetMarker = $lgbTargetMarker;

        return $this;
    }

    public function getColumn2(): ?string
    {
        return $this->column2;
    }

    public function setColumn2(?string $column2): self
    {
        $this->column2 = $column2;

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

    public function getColumn4(): ?int
    {
        return $this->column4;
    }

    public function setColumn4(?int $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getColumn5(): ?int
    {
        return $this->column5;
    }

    public function setColumn5(?int $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getColumn6(): ?int
    {
        return $this->column6;
    }

    public function setColumn6(?int $column6): self
    {
        $this->column6 = $column6;

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

    public function getColumn8(): ?int
    {
        return $this->column8;
    }

    public function setColumn8(?int $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getColumn9(): ?string
    {
        return $this->column9;
    }

    public function setColumn9(?string $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getColumn10(): ?int
    {
        return $this->column10;
    }

    public function setColumn10(?int $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }

    public function getColumn11(): ?int
    {
        return $this->column11;
    }

    public function setColumn11(?int $column11): self
    {
        $this->column11 = $column11;

        return $this;
    }

    public function getVfxFire(): ?string
    {
        return $this->vfxFire;
    }

    public function setVfxFire(?string $vfxFire): self
    {
        $this->vfxFire = $vfxFire;

        return $this;
    }

    public function getVfxHit(): ?string
    {
        return $this->vfxHit;
    }

    public function setVfxHit(?string $vfxHit): self
    {
        $this->vfxHit = $vfxHit;

        return $this;
    }

    public function getVfxMiss(): ?string
    {
        return $this->vfxMiss;
    }

    public function setVfxMiss(?string $vfxMiss): self
    {
        $this->vfxMiss = $vfxMiss;

        return $this;
    }

    public function getVfxAdditional(): ?string
    {
        return $this->vfxAdditional;
    }

    public function setVfxAdditional(?string $vfxAdditional): self
    {
        $this->vfxAdditional = $vfxAdditional;

        return $this;
    }

    public function getColumn16(): ?string
    {
        return $this->column16;
    }

    public function setColumn16(?string $column16): self
    {
        $this->column16 = $column16;

        return $this;
    }

    public function getColumn17(): ?bool
    {
        return $this->column17;
    }

    public function setColumn17(?bool $column17): self
    {
        $this->column17 = $column17;

        return $this;
    }

    public function getLgbEventNpc00(): ?string
    {
        return $this->lgbEventNpc00;
    }

    public function setLgbEventNpc00(?string $lgbEventNpc00): self
    {
        $this->lgbEventNpc00 = $lgbEventNpc00;

        return $this;
    }

    public function getLgbEventNpc01(): ?string
    {
        return $this->lgbEventNpc01;
    }

    public function setLgbEventNpc01(?string $lgbEventNpc01): self
    {
        $this->lgbEventNpc01 = $lgbEventNpc01;

        return $this;
    }

    public function getLgbEventNpc02(): ?string
    {
        return $this->lgbEventNpc02;
    }

    public function setLgbEventNpc02(?string $lgbEventNpc02): self
    {
        $this->lgbEventNpc02 = $lgbEventNpc02;

        return $this;
    }

    public function getLgbEventNpc03(): ?string
    {
        return $this->lgbEventNpc03;
    }

    public function setLgbEventNpc03(?string $lgbEventNpc03): self
    {
        $this->lgbEventNpc03 = $lgbEventNpc03;

        return $this;
    }

    public function getLgbEventNpc04(): ?string
    {
        return $this->lgbEventNpc04;
    }

    public function setLgbEventNpc04(?string $lgbEventNpc04): self
    {
        $this->lgbEventNpc04 = $lgbEventNpc04;

        return $this;
    }

    public function getLgbEventNpc05(): ?string
    {
        return $this->lgbEventNpc05;
    }

    public function setLgbEventNpc05(?string $lgbEventNpc05): self
    {
        $this->lgbEventNpc05 = $lgbEventNpc05;

        return $this;
    }

    public function getLgbEventNpc06(): ?string
    {
        return $this->lgbEventNpc06;
    }

    public function setLgbEventNpc06(?string $lgbEventNpc06): self
    {
        $this->lgbEventNpc06 = $lgbEventNpc06;

        return $this;
    }

    public function getLgbEventNpc07(): ?string
    {
        return $this->lgbEventNpc07;
    }

    public function setLgbEventNpc07(?string $lgbEventNpc07): self
    {
        $this->lgbEventNpc07 = $lgbEventNpc07;

        return $this;
    }

    public function getColumn26(): ?string
    {
        return $this->column26;
    }

    public function setColumn26(?string $column26): self
    {
        $this->column26 = $column26;

        return $this;
    }

    public function getColumn27(): ?string
    {
        return $this->column27;
    }

    public function setColumn27(?string $column27): self
    {
        $this->column27 = $column27;

        return $this;
    }

    public function getColumn28(): ?string
    {
        return $this->column28;
    }

    public function setColumn28(?string $column28): self
    {
        $this->column28 = $column28;

        return $this;
    }

    public function getColumn29(): ?string
    {
        return $this->column29;
    }

    public function setColumn29(?string $column29): self
    {
        $this->column29 = $column29;

        return $this;
    }

    public function getColumn30(): ?string
    {
        return $this->column30;
    }

    public function setColumn30(?string $column30): self
    {
        $this->column30 = $column30;

        return $this;
    }

    public function getColumn31(): ?string
    {
        return $this->column31;
    }

    public function setColumn31(?string $column31): self
    {
        $this->column31 = $column31;

        return $this;
    }

    public function getColumn32(): ?string
    {
        return $this->column32;
    }

    public function setColumn32(?string $column32): self
    {
        $this->column32 = $column32;

        return $this;
    }

    public function getColumn33(): ?string
    {
        return $this->column33;
    }

    public function setColumn33(?string $column33): self
    {
        $this->column33 = $column33;

        return $this;
    }

    public function getColumn34(): ?string
    {
        return $this->column34;
    }

    public function setColumn34(?string $column34): self
    {
        $this->column34 = $column34;

        return $this;
    }

    public function getColumn35(): ?string
    {
        return $this->column35;
    }

    public function setColumn35(?string $column35): self
    {
        $this->column35 = $column35;

        return $this;
    }

    public function getColumn36(): ?string
    {
        return $this->column36;
    }

    public function setColumn36(?string $column36): self
    {
        $this->column36 = $column36;

        return $this;
    }

    public function getColumn37(): ?string
    {
        return $this->column37;
    }

    public function setColumn37(?string $column37): self
    {
        $this->column37 = $column37;

        return $this;
    }

    public function getColumn38(): ?string
    {
        return $this->column38;
    }

    public function setColumn38(?string $column38): self
    {
        $this->column38 = $column38;

        return $this;
    }

    public function getColumn39(): ?string
    {
        return $this->column39;
    }

    public function setColumn39(?string $column39): self
    {
        $this->column39 = $column39;

        return $this;
    }

    public function getColumn40(): ?string
    {
        return $this->column40;
    }

    public function setColumn40(?string $column40): self
    {
        $this->column40 = $column40;

        return $this;
    }

    public function getColumn41(): ?string
    {
        return $this->column41;
    }

    public function setColumn41(?string $column41): self
    {
        $this->column41 = $column41;

        return $this;
    }

    public function getColumn42(): ?int
    {
        return $this->column42;
    }

    public function setColumn42(?int $column42): self
    {
        $this->column42 = $column42;

        return $this;
    }

    public function getColumn43(): ?int
    {
        return $this->column43;
    }

    public function setColumn43(?int $column43): self
    {
        $this->column43 = $column43;

        return $this;
    }

    public function getColumn44(): ?int
    {
        return $this->column44;
    }

    public function setColumn44(?int $column44): self
    {
        $this->column44 = $column44;

        return $this;
    }

    public function getColumn45(): ?int
    {
        return $this->column45;
    }

    public function setColumn45(?int $column45): self
    {
        $this->column45 = $column45;

        return $this;
    }

    public function getColumn46(): ?int
    {
        return $this->column46;
    }

    public function setColumn46(?int $column46): self
    {
        $this->column46 = $column46;

        return $this;
    }

    public function getColumn47(): ?int
    {
        return $this->column47;
    }

    public function setColumn47(?int $column47): self
    {
        $this->column47 = $column47;

        return $this;
    }

    public function getColumn48(): ?int
    {
        return $this->column48;
    }

    public function setColumn48(?int $column48): self
    {
        $this->column48 = $column48;

        return $this;
    }

    public function getColumn49(): ?int
    {
        return $this->column49;
    }

    public function setColumn49(?int $column49): self
    {
        $this->column49 = $column49;

        return $this;
    }

    public function getColumn50(): ?string
    {
        return $this->column50;
    }

    public function setColumn50(?string $column50): self
    {
        $this->column50 = $column50;

        return $this;
    }

    public function getColumn51(): ?string
    {
        return $this->column51;
    }

    public function setColumn51(?string $column51): self
    {
        $this->column51 = $column51;

        return $this;
    }

    public function getColumn52(): ?string
    {
        return $this->column52;
    }

    public function setColumn52(?string $column52): self
    {
        $this->column52 = $column52;

        return $this;
    }

    public function getColumn53(): ?string
    {
        return $this->column53;
    }

    public function setColumn53(?string $column53): self
    {
        $this->column53 = $column53;

        return $this;
    }

    public function getColumn54(): ?string
    {
        return $this->column54;
    }

    public function setColumn54(?string $column54): self
    {
        $this->column54 = $column54;

        return $this;
    }

    public function getColumn55(): ?string
    {
        return $this->column55;
    }

    public function setColumn55(?string $column55): self
    {
        $this->column55 = $column55;

        return $this;
    }

    public function getColumn56(): ?string
    {
        return $this->column56;
    }

    public function setColumn56(?string $column56): self
    {
        $this->column56 = $column56;

        return $this;
    }

    public function getColumn57(): ?string
    {
        return $this->column57;
    }

    public function setColumn57(?string $column57): self
    {
        $this->column57 = $column57;

        return $this;
    }

    public function getColumn58(): ?string
    {
        return $this->column58;
    }

    public function setColumn58(?string $column58): self
    {
        $this->column58 = $column58;

        return $this;
    }

    public function getColumn59(): ?string
    {
        return $this->column59;
    }

    public function setColumn59(?string $column59): self
    {
        $this->column59 = $column59;

        return $this;
    }

    public function getColumn60(): ?string
    {
        return $this->column60;
    }

    public function setColumn60(?string $column60): self
    {
        $this->column60 = $column60;

        return $this;
    }

    public function getColumn61(): ?string
    {
        return $this->column61;
    }

    public function setColumn61(?string $column61): self
    {
        $this->column61 = $column61;

        return $this;
    }

    public function getColumn62(): ?string
    {
        return $this->column62;
    }

    public function setColumn62(?string $column62): self
    {
        $this->column62 = $column62;

        return $this;
    }

    public function getColumn63(): ?string
    {
        return $this->column63;
    }

    public function setColumn63(?string $column63): self
    {
        $this->column63 = $column63;

        return $this;
    }

    public function getColumn64(): ?string
    {
        return $this->column64;
    }

    public function setColumn64(?string $column64): self
    {
        $this->column64 = $column64;

        return $this;
    }

    public function getColumn65(): ?string
    {
        return $this->column65;
    }

    public function setColumn65(?string $column65): self
    {
        $this->column65 = $column65;

        return $this;
    }

    public function getColumn66(): ?int
    {
        return $this->column66;
    }

    public function setColumn66(?int $column66): self
    {
        $this->column66 = $column66;

        return $this;
    }

    public function getColumn67(): ?int
    {
        return $this->column67;
    }

    public function setColumn67(?int $column67): self
    {
        $this->column67 = $column67;

        return $this;
    }

    public function getColumn68(): ?int
    {
        return $this->column68;
    }

    public function setColumn68(?int $column68): self
    {
        $this->column68 = $column68;

        return $this;
    }

    public function getColumn69(): ?int
    {
        return $this->column69;
    }

    public function setColumn69(?int $column69): self
    {
        $this->column69 = $column69;

        return $this;
    }

    public function getColumn70(): ?int
    {
        return $this->column70;
    }

    public function setColumn70(?int $column70): self
    {
        $this->column70 = $column70;

        return $this;
    }

    public function getColumn71(): ?int
    {
        return $this->column71;
    }

    public function setColumn71(?int $column71): self
    {
        $this->column71 = $column71;

        return $this;
    }

    public function getColumn72(): ?int
    {
        return $this->column72;
    }

    public function setColumn72(?int $column72): self
    {
        $this->column72 = $column72;

        return $this;
    }

    public function getColumn73(): ?int
    {
        return $this->column73;
    }

    public function setColumn73(?int $column73): self
    {
        $this->column73 = $column73;

        return $this;
    }

    public function getLgbEventNpc10(): ?string
    {
        return $this->lgbEventNpc10;
    }

    public function setLgbEventNpc10(?string $lgbEventNpc10): self
    {
        $this->lgbEventNpc10 = $lgbEventNpc10;

        return $this;
    }

    public function getLgbEventNpc11(): ?string
    {
        return $this->lgbEventNpc11;
    }

    public function setLgbEventNpc11(?string $lgbEventNpc11): self
    {
        $this->lgbEventNpc11 = $lgbEventNpc11;

        return $this;
    }

    public function getLgbEventNpc12(): ?string
    {
        return $this->lgbEventNpc12;
    }

    public function setLgbEventNpc12(?string $lgbEventNpc12): self
    {
        $this->lgbEventNpc12 = $lgbEventNpc12;

        return $this;
    }

    public function getLgbEventNpc13(): ?string
    {
        return $this->lgbEventNpc13;
    }

    public function setLgbEventNpc13(?string $lgbEventNpc13): self
    {
        $this->lgbEventNpc13 = $lgbEventNpc13;

        return $this;
    }

    public function getLgbEventNpc14(): ?string
    {
        return $this->lgbEventNpc14;
    }

    public function setLgbEventNpc14(?string $lgbEventNpc14): self
    {
        $this->lgbEventNpc14 = $lgbEventNpc14;

        return $this;
    }

    public function getLgbEventNpc15(): ?string
    {
        return $this->lgbEventNpc15;
    }

    public function setLgbEventNpc15(?string $lgbEventNpc15): self
    {
        $this->lgbEventNpc15 = $lgbEventNpc15;

        return $this;
    }

    public function getLgbEventNpc16(): ?string
    {
        return $this->lgbEventNpc16;
    }

    public function setLgbEventNpc16(?string $lgbEventNpc16): self
    {
        $this->lgbEventNpc16 = $lgbEventNpc16;

        return $this;
    }

    public function getLgbEventNpc17(): ?string
    {
        return $this->lgbEventNpc17;
    }

    public function setLgbEventNpc17(?string $lgbEventNpc17): self
    {
        $this->lgbEventNpc17 = $lgbEventNpc17;

        return $this;
    }

    public function getColumn82(): ?string
    {
        return $this->column82;
    }

    public function setColumn82(?string $column82): self
    {
        $this->column82 = $column82;

        return $this;
    }

    public function getColumn83(): ?string
    {
        return $this->column83;
    }

    public function setColumn83(?string $column83): self
    {
        $this->column83 = $column83;

        return $this;
    }

    public function getColumn84(): ?string
    {
        return $this->column84;
    }

    public function setColumn84(?string $column84): self
    {
        $this->column84 = $column84;

        return $this;
    }

    public function getColumn85(): ?string
    {
        return $this->column85;
    }

    public function setColumn85(?string $column85): self
    {
        $this->column85 = $column85;

        return $this;
    }

    public function getColumn86(): ?int
    {
        return $this->column86;
    }

    public function setColumn86(?int $column86): self
    {
        $this->column86 = $column86;

        return $this;
    }

    public function getColumn87(): ?int
    {
        return $this->column87;
    }

    public function setColumn87(?int $column87): self
    {
        $this->column87 = $column87;

        return $this;
    }

    public function getColumn88(): ?int
    {
        return $this->column88;
    }

    public function setColumn88(?int $column88): self
    {
        $this->column88 = $column88;

        return $this;
    }

    public function getColumn89(): ?int
    {
        return $this->column89;
    }

    public function setColumn89(?int $column89): self
    {
        $this->column89 = $column89;

        return $this;
    }

    public function getColumn90(): ?string
    {
        return $this->column90;
    }

    public function setColumn90(?string $column90): self
    {
        $this->column90 = $column90;

        return $this;
    }

    public function getColumn91(): ?string
    {
        return $this->column91;
    }

    public function setColumn91(?string $column91): self
    {
        $this->column91 = $column91;

        return $this;
    }

    public function getColumn92(): ?string
    {
        return $this->column92;
    }

    public function setColumn92(?string $column92): self
    {
        $this->column92 = $column92;

        return $this;
    }

    public function getColumn93(): ?string
    {
        return $this->column93;
    }

    public function setColumn93(?string $column93): self
    {
        $this->column93 = $column93;

        return $this;
    }

    public function getObjective0(): ?string
    {
        return $this->objective0;
    }

    public function setObjective0(?string $objective0): self
    {
        $this->objective0 = $objective0;

        return $this;
    }

    public function getHint0(): ?string
    {
        return $this->hint0;
    }

    public function setHint0(?string $hint0): self
    {
        $this->hint0 = $hint0;

        return $this;
    }

    public function getObjective1(): ?string
    {
        return $this->objective1;
    }

    public function setObjective1(?string $objective1): self
    {
        $this->objective1 = $objective1;

        return $this;
    }

    public function getHint1(): ?string
    {
        return $this->hint1;
    }

    public function setHint1(?string $hint1): self
    {
        $this->hint1 = $hint1;

        return $this;
    }

    public function getColumn98(): ?string
    {
        return $this->column98;
    }

    public function setColumn98(?string $column98): self
    {
        $this->column98 = $column98;

        return $this;
    }

    public function getColumn99(): ?string
    {
        return $this->column99;
    }

    public function setColumn99(?string $column99): self
    {
        $this->column99 = $column99;

        return $this;
    }

    public function getColumn100(): ?string
    {
        return $this->column100;
    }

    public function setColumn100(?string $column100): self
    {
        $this->column100 = $column100;

        return $this;
    }

    public function getColumn101(): ?string
    {
        return $this->column101;
    }

    public function setColumn101(?string $column101): self
    {
        $this->column101 = $column101;

        return $this;
    }

    public function getColumn102(): ?string
    {
        return $this->column102;
    }

    public function setColumn102(?string $column102): self
    {
        $this->column102 = $column102;

        return $this;
    }

    public function getColumn103(): ?string
    {
        return $this->column103;
    }

    public function setColumn103(?string $column103): self
    {
        $this->column103 = $column103;

        return $this;
    }

    public function getColumn104(): ?string
    {
        return $this->column104;
    }

    public function setColumn104(?string $column104): self
    {
        $this->column104 = $column104;

        return $this;
    }

    public function getActionText(): ?string
    {
        return $this->actionText;
    }

    public function setActionText(?string $actionText): self
    {
        $this->actionText = $actionText;

        return $this;
    }

    public function getColumn106(): ?int
    {
        return $this->column106;
    }

    public function setColumn106(?int $column106): self
    {
        $this->column106 = $column106;

        return $this;
    }

    public function getColumn107(): ?int
    {
        return $this->column107;
    }

    public function setColumn107(?int $column107): self
    {
        $this->column107 = $column107;

        return $this;
    }
}
