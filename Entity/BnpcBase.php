<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BnpcBase.
 *
 * @ORM\Table(name="bnpc_base", indexes={@ORM\Index(name="idx_6846dbbdad2f07ff", columns={"npc_equip"}), @ORM\Index(name="idx_6846dbbde68dcb24", columns={"bnpc_parts"}), @ORM\Index(name="idx_6846dbbd5c33d417", columns={"bnpc_customize"}), @ORM\Index(name="idx_6846dbbd6b282906", columns={"link_race"}), @ORM\Index(name="idx_6846dbbdda827b98", columns={"battalion"}), @ORM\Index(name="idx_6846dbbdb6c8ee36", columns={"model_chara"}), @ORM\Index(name="idx_6846dbbd957e262a", columns={"array_event_handler"})})
 * @ORM\Entity
 */
class BnpcBase
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bnpc_base_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior", type="integer", nullable=true)
     */
    private $behavior;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rank", type="integer", nullable=true)
     */
    private $rank;

    /**
     * @var string|null
     *
     * @ORM\Column(name="scale", type="string", length=255, nullable=true)
     */
    private $scale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="special", type="bigint", nullable=true)
     */
    private $special;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sepack", type="integer", nullable=true)
     */
    private $sepack;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_11", type="boolean", nullable=true)
     */
    private $column11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_14", type="integer", nullable=true)
     */
    private $column14;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_target_line", type="boolean", nullable=true)
     */
    private $isTargetLine;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_display_level", type="boolean", nullable=true)
     */
    private $isDisplayLevel;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_17", type="boolean", nullable=true)
     */
    private $column17;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_18", type="boolean", nullable=true)
     */
    private $column18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_19", type="integer", nullable=true)
     */
    private $column19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_20", type="integer", nullable=true)
     */
    private $column20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_21", type="integer", nullable=true)
     */
    private $column21;

    /**
     * @var BnpcParts
     *
     * @ORM\ManyToOne(targetEntity="BnpcParts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_parts", referencedColumnName="pk")
     * })
     */
    private $bnpcParts;

    /**
     * @var ArrayEventHandler
     *
     * @ORM\ManyToOne(targetEntity="ArrayEventHandler")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="array_event_handler", referencedColumnName="pk")
     * })
     */
    private $arrayEventHandler;

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
     * @var BnpcCustomize
     *
     * @ORM\ManyToOne(targetEntity="BnpcCustomize")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_customize", referencedColumnName="pk")
     * })
     */
    private $bnpcCustomize;

    /**
     * @var ModelChara
     *
     * @ORM\ManyToOne(targetEntity="ModelChara")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="model_chara", referencedColumnName="pk")
     * })
     */
    private $modelChara;

    /**
     * @var LinkRace
     *
     * @ORM\ManyToOne(targetEntity="LinkRace")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="link_race", referencedColumnName="pk")
     * })
     */
    private $linkRace;

    /**
     * @var Battalion
     *
     * @ORM\ManyToOne(targetEntity="Battalion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="battalion", referencedColumnName="pk")
     * })
     */
    private $battalion;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(?int $rank): self
    {
        $this->rank = $rank;

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

    public function getSpecial(): ?string
    {
        return $this->special;
    }

    public function setSpecial(?string $special): self
    {
        $this->special = $special;

        return $this;
    }

    public function getSepack(): ?int
    {
        return $this->sepack;
    }

    public function setSepack(?int $sepack): self
    {
        $this->sepack = $sepack;

        return $this;
    }

    public function getColumn11(): ?bool
    {
        return $this->column11;
    }

    public function setColumn11(?bool $column11): self
    {
        $this->column11 = $column11;

        return $this;
    }

    public function getColumn14(): ?int
    {
        return $this->column14;
    }

    public function setColumn14(?int $column14): self
    {
        $this->column14 = $column14;

        return $this;
    }

    public function getIsTargetLine(): ?bool
    {
        return $this->isTargetLine;
    }

    public function setIsTargetLine(?bool $isTargetLine): self
    {
        $this->isTargetLine = $isTargetLine;

        return $this;
    }

    public function getIsDisplayLevel(): ?bool
    {
        return $this->isDisplayLevel;
    }

    public function setIsDisplayLevel(?bool $isDisplayLevel): self
    {
        $this->isDisplayLevel = $isDisplayLevel;

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

    public function getColumn18(): ?bool
    {
        return $this->column18;
    }

    public function setColumn18(?bool $column18): self
    {
        $this->column18 = $column18;

        return $this;
    }

    public function getColumn19(): ?int
    {
        return $this->column19;
    }

    public function setColumn19(?int $column19): self
    {
        $this->column19 = $column19;

        return $this;
    }

    public function getColumn20(): ?int
    {
        return $this->column20;
    }

    public function setColumn20(?int $column20): self
    {
        $this->column20 = $column20;

        return $this;
    }

    public function getColumn21(): ?int
    {
        return $this->column21;
    }

    public function setColumn21(?int $column21): self
    {
        $this->column21 = $column21;

        return $this;
    }

    public function getBnpcParts(): ?BnpcParts
    {
        return $this->bnpcParts;
    }

    public function setBnpcParts(?BnpcParts $bnpcParts): self
    {
        $this->bnpcParts = $bnpcParts;

        return $this;
    }

    public function getArrayEventHandler(): ?ArrayEventHandler
    {
        return $this->arrayEventHandler;
    }

    public function setArrayEventHandler(?ArrayEventHandler $arrayEventHandler): self
    {
        $this->arrayEventHandler = $arrayEventHandler;

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

    public function getBnpcCustomize(): ?BnpcCustomize
    {
        return $this->bnpcCustomize;
    }

    public function setBnpcCustomize(?BnpcCustomize $bnpcCustomize): self
    {
        $this->bnpcCustomize = $bnpcCustomize;

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

    public function getLinkRace(): ?LinkRace
    {
        return $this->linkRace;
    }

    public function setLinkRace(?LinkRace $linkRace): self
    {
        $this->linkRace = $linkRace;

        return $this;
    }

    public function getBattalion(): ?Battalion
    {
        return $this->battalion;
    }

    public function setBattalion(?Battalion $battalion): self
    {
        $this->battalion = $battalion;

        return $this;
    }
}
