<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Warp.
 *
 * @ORM\Table(name="warp", indexes={@ORM\Index(name="idx_d3b58c6696ee9add", columns={"territory_type"}), @ORM\Index(name="idx_d3b58c6615d4969f", columns={"start_cutscene"}), @ORM\Index(name="idx_d3b58c66a8ef6f29", columns={"warp_condition"}), @ORM\Index(name="idx_d3b58c66d3bd4520", columns={"end_cutscene"}), @ORM\Index(name="idx_d3b58c665b74a231", columns={"pop_range"}), @ORM\Index(name="idx_d3b58c664506e99", columns={"condition_fail_event"}), @ORM\Index(name="idx_d3b58c665159df24", columns={"warp_logic"}), @ORM\Index(name="idx_d3b58c66e1c5f726", columns={"condition_success_event"}), @ORM\Index(name="idx_d3b58c66cc5001cd", columns={"confirm_event"})})
 * @ORM\Entity
 */
class Warp
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="warp_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_skip_cutscene", type="boolean", nullable=true)
     */
    private $canSkipCutscene;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question", type="string", length=255, nullable=true)
     */
    private $question;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="end_cutscene", referencedColumnName="pk")
     * })
     */
    private $endCutscene;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="start_cutscene", referencedColumnName="pk")
     * })
     */
    private $startCutscene;

    /**
     * @var WarpLogic
     *
     * @ORM\ManyToOne(targetEntity="WarpLogic")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="warp_logic", referencedColumnName="pk")
     * })
     */
    private $warpLogic;

    /**
     * @var WarpCondition
     *
     * @ORM\ManyToOne(targetEntity="WarpCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="warp_condition", referencedColumnName="pk")
     * })
     */
    private $warpCondition;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="confirm_event", referencedColumnName="pk")
     * })
     */
    private $confirmEvent;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="condition_fail_event", referencedColumnName="pk")
     * })
     */
    private $conditionFailEvent;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="condition_success_event", referencedColumnName="pk")
     * })
     */
    private $conditionSuccessEvent;

    /**
     * @var TerritoryType
     *
     * @ORM\ManyToOne(targetEntity="TerritoryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="territory_type", referencedColumnName="pk")
     * })
     */
    private $territoryType;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pop_range", referencedColumnName="pk")
     * })
     */
    private $popRange;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getCanSkipCutscene(): ?bool
    {
        return $this->canSkipCutscene;
    }

    public function setCanSkipCutscene(?bool $canSkipCutscene): self
    {
        $this->canSkipCutscene = $canSkipCutscene;

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

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(?string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getEndCutscene(): ?Cutscene
    {
        return $this->endCutscene;
    }

    public function setEndCutscene(?Cutscene $endCutscene): self
    {
        $this->endCutscene = $endCutscene;

        return $this;
    }

    public function getStartCutscene(): ?Cutscene
    {
        return $this->startCutscene;
    }

    public function setStartCutscene(?Cutscene $startCutscene): self
    {
        $this->startCutscene = $startCutscene;

        return $this;
    }

    public function getWarpLogic(): ?WarpLogic
    {
        return $this->warpLogic;
    }

    public function setWarpLogic(?WarpLogic $warpLogic): self
    {
        $this->warpLogic = $warpLogic;

        return $this;
    }

    public function getWarpCondition(): ?WarpCondition
    {
        return $this->warpCondition;
    }

    public function setWarpCondition(?WarpCondition $warpCondition): self
    {
        $this->warpCondition = $warpCondition;

        return $this;
    }

    public function getConfirmEvent(): ?DefaultTalk
    {
        return $this->confirmEvent;
    }

    public function setConfirmEvent(?DefaultTalk $confirmEvent): self
    {
        $this->confirmEvent = $confirmEvent;

        return $this;
    }

    public function getConditionFailEvent(): ?DefaultTalk
    {
        return $this->conditionFailEvent;
    }

    public function setConditionFailEvent(?DefaultTalk $conditionFailEvent): self
    {
        $this->conditionFailEvent = $conditionFailEvent;

        return $this;
    }

    public function getConditionSuccessEvent(): ?DefaultTalk
    {
        return $this->conditionSuccessEvent;
    }

    public function setConditionSuccessEvent(?DefaultTalk $conditionSuccessEvent): self
    {
        $this->conditionSuccessEvent = $conditionSuccessEvent;

        return $this;
    }

    public function getTerritoryType(): ?TerritoryType
    {
        return $this->territoryType;
    }

    public function setTerritoryType(?TerritoryType $territoryType): self
    {
        $this->territoryType = $territoryType;

        return $this;
    }

    public function getPopRange(): ?Level
    {
        return $this->popRange;
    }

    public function setPopRange(?Level $popRange): self
    {
        $this->popRange = $popRange;

        return $this;
    }
}
