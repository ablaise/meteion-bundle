<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emote.
 *
 * @ORM\Table(name="emote", indexes={@ORM\Index(name="idx_6bbc85c67d6c7790", columns={"emote_category"}), @ORM\Index(name="idx_6bbc85c67f4c2041", columns={"action_timeline_4"}), @ORM\Index(name="idx_6bbc85c6e128b5e2", columns={"action_timeline_3"}), @ORM\Index(name="idx_6bbc85c67821e458", columns={"action_timeline_0"}), @ORM\Index(name="idx_6bbc85c6f26d4ce", columns={"action_timeline_1"}), @ORM\Index(name="idx_6bbc85c684b10d7", columns={"action_timeline_5"}), @ORM\Index(name="idx_6bbc85c63c70d9da", columns={"emote_mode"}), @ORM\Index(name="idx_6bbc85c69142416d", columns={"action_timeline_6"}), @ORM\Index(name="idx_6bbc85c65945f87d", columns={"log_message_untargeted"}), @ORM\Index(name="idx_6bbc85c6962f8574", columns={"action_timeline_2"}), @ORM\Index(name="idx_6bbc85c6aa6bc5eb", columns={"text_command"}), @ORM\Index(name="idx_6bbc85c6b44d257e", columns={"log_message_targeted"})})
 * @ORM\Entity
 */
class Emote
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="emote_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_9", type="boolean", nullable=true)
     */
    private $column9;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_10", type="boolean", nullable=true)
     */
    private $column10;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_11", type="boolean", nullable=true)
     */
    private $column11;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_14", type="boolean", nullable=true)
     */
    private $column14;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_15", type="boolean", nullable=true)
     */
    private $column15;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="has_cancel_emote", type="boolean", nullable=true)
     */
    private $hasCancelEmote;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="draws_weapon", type="boolean", nullable=true)
     */
    private $drawsWeapon;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_18", type="boolean", nullable=true)
     */
    private $column18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="bigint", nullable=true)
     */
    private $order;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="unlock_link", type="bigint", nullable=true)
     */
    private $unlockLink;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_25", type="bigint", nullable=true)
     */
    private $column25;

    /**
     * @var LogMessage
     *
     * @ORM\ManyToOne(targetEntity="LogMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="log_message_untargeted", referencedColumnName="pk")
     * })
     */
    private $logMessageUntargeted;

    /**
     * @var LogMessage
     *
     * @ORM\ManyToOne(targetEntity="LogMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="log_message_targeted", referencedColumnName="pk")
     * })
     */
    private $logMessageTargeted;

    /**
     * @var TextCommand
     *
     * @ORM\ManyToOne(targetEntity="TextCommand")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="text_command", referencedColumnName="pk")
     * })
     */
    private $textCommand;

    /**
     * @var EmoteMode
     *
     * @ORM\ManyToOne(targetEntity="EmoteMode")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="emote_mode", referencedColumnName="pk")
     * })
     */
    private $emoteMode;

    /**
     * @var EmoteCategory
     *
     * @ORM\ManyToOne(targetEntity="EmoteCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="emote_category", referencedColumnName="pk")
     * })
     */
    private $emoteCategory;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_timeline_6", referencedColumnName="pk")
     * })
     */
    private $actionTimeline6;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_timeline_5", referencedColumnName="pk")
     * })
     */
    private $actionTimeline5;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_timeline_4", referencedColumnName="pk")
     * })
     */
    private $actionTimeline4;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_timeline_3", referencedColumnName="pk")
     * })
     */
    private $actionTimeline3;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_timeline_2", referencedColumnName="pk")
     * })
     */
    private $actionTimeline2;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_timeline_1", referencedColumnName="pk")
     * })
     */
    private $actionTimeline1;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_timeline_0", referencedColumnName="pk")
     * })
     */
    private $actionTimeline0;

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

    public function getColumn9(): ?bool
    {
        return $this->column9;
    }

    public function setColumn9(?bool $column9): self
    {
        $this->column9 = $column9;

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

    public function getColumn11(): ?bool
    {
        return $this->column11;
    }

    public function setColumn11(?bool $column11): self
    {
        $this->column11 = $column11;

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

    public function getColumn15(): ?bool
    {
        return $this->column15;
    }

    public function setColumn15(?bool $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }

    public function getHasCancelEmote(): ?bool
    {
        return $this->hasCancelEmote;
    }

    public function setHasCancelEmote(?bool $hasCancelEmote): self
    {
        $this->hasCancelEmote = $hasCancelEmote;

        return $this;
    }

    public function getDrawsWeapon(): ?bool
    {
        return $this->drawsWeapon;
    }

    public function setDrawsWeapon(?bool $drawsWeapon): self
    {
        $this->drawsWeapon = $drawsWeapon;

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

    public function getOrder(): ?string
    {
        return $this->order;
    }

    public function setOrder(?string $order): self
    {
        $this->order = $order;

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

    public function getUnlockLink(): ?string
    {
        return $this->unlockLink;
    }

    public function setUnlockLink(?string $unlockLink): self
    {
        $this->unlockLink = $unlockLink;

        return $this;
    }

    public function getColumn25(): ?string
    {
        return $this->column25;
    }

    public function setColumn25(?string $column25): self
    {
        $this->column25 = $column25;

        return $this;
    }

    public function getLogMessageUntargeted(): ?LogMessage
    {
        return $this->logMessageUntargeted;
    }

    public function setLogMessageUntargeted(?LogMessage $logMessageUntargeted): self
    {
        $this->logMessageUntargeted = $logMessageUntargeted;

        return $this;
    }

    public function getLogMessageTargeted(): ?LogMessage
    {
        return $this->logMessageTargeted;
    }

    public function setLogMessageTargeted(?LogMessage $logMessageTargeted): self
    {
        $this->logMessageTargeted = $logMessageTargeted;

        return $this;
    }

    public function getTextCommand(): ?TextCommand
    {
        return $this->textCommand;
    }

    public function setTextCommand(?TextCommand $textCommand): self
    {
        $this->textCommand = $textCommand;

        return $this;
    }

    public function getEmoteMode(): ?EmoteMode
    {
        return $this->emoteMode;
    }

    public function setEmoteMode(?EmoteMode $emoteMode): self
    {
        $this->emoteMode = $emoteMode;

        return $this;
    }

    public function getEmoteCategory(): ?EmoteCategory
    {
        return $this->emoteCategory;
    }

    public function setEmoteCategory(?EmoteCategory $emoteCategory): self
    {
        $this->emoteCategory = $emoteCategory;

        return $this;
    }

    public function getActionTimeline6(): ?ActionTimeline
    {
        return $this->actionTimeline6;
    }

    public function setActionTimeline6(?ActionTimeline $actionTimeline6): self
    {
        $this->actionTimeline6 = $actionTimeline6;

        return $this;
    }

    public function getActionTimeline5(): ?ActionTimeline
    {
        return $this->actionTimeline5;
    }

    public function setActionTimeline5(?ActionTimeline $actionTimeline5): self
    {
        $this->actionTimeline5 = $actionTimeline5;

        return $this;
    }

    public function getActionTimeline4(): ?ActionTimeline
    {
        return $this->actionTimeline4;
    }

    public function setActionTimeline4(?ActionTimeline $actionTimeline4): self
    {
        $this->actionTimeline4 = $actionTimeline4;

        return $this;
    }

    public function getActionTimeline3(): ?ActionTimeline
    {
        return $this->actionTimeline3;
    }

    public function setActionTimeline3(?ActionTimeline $actionTimeline3): self
    {
        $this->actionTimeline3 = $actionTimeline3;

        return $this;
    }

    public function getActionTimeline2(): ?ActionTimeline
    {
        return $this->actionTimeline2;
    }

    public function setActionTimeline2(?ActionTimeline $actionTimeline2): self
    {
        $this->actionTimeline2 = $actionTimeline2;

        return $this;
    }

    public function getActionTimeline1(): ?ActionTimeline
    {
        return $this->actionTimeline1;
    }

    public function setActionTimeline1(?ActionTimeline $actionTimeline1): self
    {
        $this->actionTimeline1 = $actionTimeline1;

        return $this;
    }

    public function getActionTimeline0(): ?ActionTimeline
    {
        return $this->actionTimeline0;
    }

    public function setActionTimeline0(?ActionTimeline $actionTimeline0): self
    {
        $this->actionTimeline0 = $actionTimeline0;

        return $this;
    }
}
