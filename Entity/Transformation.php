<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transformation.
 *
 * @ORM\Table(name="transformation", indexes={@ORM\Index(name="idx_f2b21a855c33d417", columns={"bnpc_customize"}), @ORM\Index(name="idx_f2b21a856453522d", columns={"action_3"}), @ORM\Index(name="idx_f2b21a858a5d3301", columns={"action_1"}), @ORM\Index(name="idx_f2b21a85e6a0b078", columns={"remove_action"}), @ORM\Index(name="idx_f2b21a85f71e5af8", columns={"rpparameter"}), @ORM\Index(name="idx_f2b21a85135462bb", columns={"action_2"}), @ORM\Index(name="idx_f2b21a85633e9634", columns={"action_7"}), @ORM\Index(name="idx_f2b21a85ce2fe779", columns={"start_vfx"}), @ORM\Index(name="idx_f2b21a85b4c53da2", columns={"end_vfx"}), @ORM\Index(name="idx_f2b21a85d79572d9", columns={"model"}), @ORM\Index(name="idx_f2b21a858d30f718", columns={"action_5"}), @ORM\Index(name="idx_f2b21a85fa37c78e", columns={"action_4"}), @ORM\Index(name="idx_f2b21a851439a6a2", columns={"action_6"}), @ORM\Index(name="idx_f2b21a85f6d15bda", columns={"bnpc_name"}), @ORM\Index(name="idx_f2b21a85ad2f07ff", columns={"npc_equip"}), @ORM\Index(name="idx_f2b21a85fd5a0397", columns={"action_0"})})
 * @ORM\Entity
 */
class Transformation
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="transformation_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ex_hotbar_enable_config", type="boolean", nullable=true)
     */
    private $exHotbarEnableConfig;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_8", type="boolean", nullable=true)
     */
    private $column8;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_10", type="boolean", nullable=true)
     */
    private $column10;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_12", type="boolean", nullable=true)
     */
    private $column12;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_14", type="boolean", nullable=true)
     */
    private $column14;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_16", type="boolean", nullable=true)
     */
    private $column16;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_18", type="boolean", nullable=true)
     */
    private $column18;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_21", type="boolean", nullable=true)
     */
    private $column21;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_22", type="boolean", nullable=true)
     */
    private $column22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_23", type="integer", nullable=true)
     */
    private $column23;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_24", type="boolean", nullable=true)
     */
    private $column24;

    /**
     * @var string|null
     *
     * @ORM\Column(name="speed", type="string", length=255, nullable=true)
     */
    private $speed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="scale", type="string", length=255, nullable=true)
     */
    private $scale;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_pv_p", type="boolean", nullable=true)
     */
    private $isPvP;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_event", type="boolean", nullable=true)
     */
    private $isEvent;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="player_camera", type="boolean", nullable=true)
     */
    private $playerCamera;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_30", type="boolean", nullable=true)
     */
    private $column30;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_31", type="boolean", nullable=true)
     */
    private $column31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_35", type="integer", nullable=true)
     */
    private $column35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_36", type="integer", nullable=true)
     */
    private $column36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_38", type="integer", nullable=true)
     */
    private $column38;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_39", type="boolean", nullable=true)
     */
    private $column39;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_40", type="boolean", nullable=true)
     */
    private $column40;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_7", referencedColumnName="pk")
     * })
     */
    private $action7;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_6", referencedColumnName="pk")
     * })
     */
    private $action6;

    /**
     * @var Vfx
     *
     * @ORM\ManyToOne(targetEntity="Vfx")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="end_vfx", referencedColumnName="pk")
     * })
     */
    private $endVfx;

    /**
     * @var Vfx
     *
     * @ORM\ManyToOne(targetEntity="Vfx")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="start_vfx", referencedColumnName="pk")
     * })
     */
    private $startVfx;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="remove_action", referencedColumnName="pk")
     * })
     */
    private $removeAction;

    /**
     * @var Rpparameter
     *
     * @ORM\ManyToOne(targetEntity="Rpparameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rpparameter", referencedColumnName="pk")
     * })
     */
    private $rpparameter;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_5", referencedColumnName="pk")
     * })
     */
    private $action5;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_4", referencedColumnName="pk")
     * })
     */
    private $action4;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_3", referencedColumnName="pk")
     * })
     */
    private $action3;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_2", referencedColumnName="pk")
     * })
     */
    private $action2;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_1", referencedColumnName="pk")
     * })
     */
    private $action1;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_0", referencedColumnName="pk")
     * })
     */
    private $action0;

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
     * @var BnpcName
     *
     * @ORM\ManyToOne(targetEntity="BnpcName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_name", referencedColumnName="pk")
     * })
     */
    private $bnpcName;

    /**
     * @var ModelChara
     *
     * @ORM\ManyToOne(targetEntity="ModelChara")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="model", referencedColumnName="pk")
     * })
     */
    private $model;

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

    public function getExHotbarEnableConfig(): ?bool
    {
        return $this->exHotbarEnableConfig;
    }

    public function setExHotbarEnableConfig(?bool $exHotbarEnableConfig): self
    {
        $this->exHotbarEnableConfig = $exHotbarEnableConfig;

        return $this;
    }

    public function getColumn8(): ?bool
    {
        return $this->column8;
    }

    public function setColumn8(?bool $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getColumn10(): ?bool
    {
        return $this->column10;
    }

    public function setColumn10(?bool $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }

    public function getColumn12(): ?bool
    {
        return $this->column12;
    }

    public function setColumn12(?bool $column12): self
    {
        $this->column12 = $column12;

        return $this;
    }

    public function getColumn14(): ?bool
    {
        return $this->column14;
    }

    public function setColumn14(?bool $column14): self
    {
        $this->column14 = $column14;

        return $this;
    }

    public function getColumn16(): ?bool
    {
        return $this->column16;
    }

    public function setColumn16(?bool $column16): self
    {
        $this->column16 = $column16;

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

    public function getColumn21(): ?bool
    {
        return $this->column21;
    }

    public function setColumn21(?bool $column21): self
    {
        $this->column21 = $column21;

        return $this;
    }

    public function getColumn22(): ?bool
    {
        return $this->column22;
    }

    public function setColumn22(?bool $column22): self
    {
        $this->column22 = $column22;

        return $this;
    }

    public function getColumn23(): ?int
    {
        return $this->column23;
    }

    public function setColumn23(?int $column23): self
    {
        $this->column23 = $column23;

        return $this;
    }

    public function getColumn24(): ?bool
    {
        return $this->column24;
    }

    public function setColumn24(?bool $column24): self
    {
        $this->column24 = $column24;

        return $this;
    }

    public function getSpeed(): ?string
    {
        return $this->speed;
    }

    public function setSpeed(?string $speed): self
    {
        $this->speed = $speed;

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

    public function getIsPvP(): ?bool
    {
        return $this->isPvP;
    }

    public function setIsPvP(?bool $isPvP): self
    {
        $this->isPvP = $isPvP;

        return $this;
    }

    public function getIsEvent(): ?bool
    {
        return $this->isEvent;
    }

    public function setIsEvent(?bool $isEvent): self
    {
        $this->isEvent = $isEvent;

        return $this;
    }

    public function getPlayerCamera(): ?bool
    {
        return $this->playerCamera;
    }

    public function setPlayerCamera(?bool $playerCamera): self
    {
        $this->playerCamera = $playerCamera;

        return $this;
    }

    public function getColumn30(): ?bool
    {
        return $this->column30;
    }

    public function setColumn30(?bool $column30): self
    {
        $this->column30 = $column30;

        return $this;
    }

    public function getColumn31(): ?bool
    {
        return $this->column31;
    }

    public function setColumn31(?bool $column31): self
    {
        $this->column31 = $column31;

        return $this;
    }

    public function getColumn35(): ?int
    {
        return $this->column35;
    }

    public function setColumn35(?int $column35): self
    {
        $this->column35 = $column35;

        return $this;
    }

    public function getColumn36(): ?int
    {
        return $this->column36;
    }

    public function setColumn36(?int $column36): self
    {
        $this->column36 = $column36;

        return $this;
    }

    public function getColumn38(): ?int
    {
        return $this->column38;
    }

    public function setColumn38(?int $column38): self
    {
        $this->column38 = $column38;

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

    public function getColumn40(): ?bool
    {
        return $this->column40;
    }

    public function setColumn40(?bool $column40): self
    {
        $this->column40 = $column40;

        return $this;
    }

    public function getAction7(): ?Action
    {
        return $this->action7;
    }

    public function setAction7(?Action $action7): self
    {
        $this->action7 = $action7;

        return $this;
    }

    public function getAction6(): ?Action
    {
        return $this->action6;
    }

    public function setAction6(?Action $action6): self
    {
        $this->action6 = $action6;

        return $this;
    }

    public function getEndVfx(): ?Vfx
    {
        return $this->endVfx;
    }

    public function setEndVfx(?Vfx $endVfx): self
    {
        $this->endVfx = $endVfx;

        return $this;
    }

    public function getStartVfx(): ?Vfx
    {
        return $this->startVfx;
    }

    public function setStartVfx(?Vfx $startVfx): self
    {
        $this->startVfx = $startVfx;

        return $this;
    }

    public function getRemoveAction(): ?Action
    {
        return $this->removeAction;
    }

    public function setRemoveAction(?Action $removeAction): self
    {
        $this->removeAction = $removeAction;

        return $this;
    }

    public function getRpparameter(): ?Rpparameter
    {
        return $this->rpparameter;
    }

    public function setRpparameter(?Rpparameter $rpparameter): self
    {
        $this->rpparameter = $rpparameter;

        return $this;
    }

    public function getAction5(): ?Action
    {
        return $this->action5;
    }

    public function setAction5(?Action $action5): self
    {
        $this->action5 = $action5;

        return $this;
    }

    public function getAction4(): ?Action
    {
        return $this->action4;
    }

    public function setAction4(?Action $action4): self
    {
        $this->action4 = $action4;

        return $this;
    }

    public function getAction3(): ?Action
    {
        return $this->action3;
    }

    public function setAction3(?Action $action3): self
    {
        $this->action3 = $action3;

        return $this;
    }

    public function getAction2(): ?Action
    {
        return $this->action2;
    }

    public function setAction2(?Action $action2): self
    {
        $this->action2 = $action2;

        return $this;
    }

    public function getAction1(): ?Action
    {
        return $this->action1;
    }

    public function setAction1(?Action $action1): self
    {
        $this->action1 = $action1;

        return $this;
    }

    public function getAction0(): ?Action
    {
        return $this->action0;
    }

    public function setAction0(?Action $action0): self
    {
        $this->action0 = $action0;

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

    public function getBnpcName(): ?BnpcName
    {
        return $this->bnpcName;
    }

    public function setBnpcName(?BnpcName $bnpcName): self
    {
        $this->bnpcName = $bnpcName;

        return $this;
    }

    public function getModel(): ?ModelChara
    {
        return $this->model;
    }

    public function setModel(?ModelChara $model): self
    {
        $this->model = $model;

        return $this;
    }
}
