<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TripleTriad.
 *
 * @ORM\Table(name="triple_triad", indexes={@ORM\Index(name="idx_38cf363dadf3fb6d", columns={"triple_triad_card_fixed_3"}), @ORM\Index(name="idx_38cf363dfc9027e2", columns={"item_possible_reward_1"}), @ORM\Index(name="idx_38cf363d6950c5dc", columns={"triple_triad_card_variable_0"}), @ORM\Index(name="idx_38cf363d875ea4f0", columns={"triple_triad_card_variable_2"}), @ORM\Index(name="idx_38cf363d73f4c19f", columns={"default_talk_pcwin"}), @ORM\Index(name="idx_38cf363d522756cf", columns={"default_talk_challenge"}), @ORM\Index(name="idx_38cf363d129e46ce", columns={"item_possible_reward_3"}), @ORM\Index(name="idx_38cf363d33976ece", columns={"triple_triad_card_fixed_4"}), @ORM\Index(name="idx_38cf363d3353d598", columns={"previous_quest_2"}), @ORM\Index(name="idx_38cf363d1e57f54a", columns={"triple_triad_card_variable_1"}), @ORM\Index(name="idx_38cf363d43fd9a41", columns={"triple_triad_card_fixed_1"}), @ORM\Index(name="idx_38cf363ddd5db4b4", columns={"previous_quest_0"}), @ORM\Index(name="idx_38cf363d34faaad7", columns={"triple_triad_card_fixed_0"}), @ORM\Index(name="idx_38cf363d6e3d01c5", columns={"triple_triad_card_variable_4"}), @ORM\Index(name="idx_38cf363d3b5edf4", columns={"default_talk_draw"}), @ORM\Index(name="idx_38cf363daa5a8422", columns={"previous_quest_1"}), @ORM\Index(name="idx_38cf363d8b971774", columns={"item_possible_reward_0"}), @ORM\Index(name="idx_38cf363ddaf4cbfb", columns={"triple_triad_card_fixed_2"}), @ORM\Index(name="idx_38cf363d65997658", columns={"item_possible_reward_2"}), @ORM\Index(name="idx_38cf363d29750ae2", columns={"triple_triad_rule_1"}), @ORM\Index(name="idx_38cf363d91f4264a", columns={"default_talk_unavailable"}), @ORM\Index(name="idx_38cf363df0599466", columns={"triple_triad_card_variable_3"}), @ORM\Index(name="idx_38cf363d5e723a74", columns={"triple_triad_rule_0"}), @ORM\Index(name="idx_38cf363d80d58f0a", columns={"default_talk_npcwin"})})
 * @ORM\Entity
 */
class TripleTriad
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="triple_triad_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="uses_regional_rules", type="boolean", nullable=true)
     */
    private $usesRegionalRules;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fee", type="bigint", nullable=true)
     */
    private $fee;

    /**
     * @var int|null
     *
     * @ORM\Column(name="previous_quest_join", type="integer", nullable=true)
     */
    private $previousQuestJoin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="start_time", type="bigint", nullable=true)
     */
    private $startTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="end_time", type="bigint", nullable=true)
     */
    private $endTime;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_26", type="boolean", nullable=true)
     */
    private $column26;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_possible_reward_3", referencedColumnName="pk")
     * })
     */
    private $itemPossibleReward3;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_possible_reward_2", referencedColumnName="pk")
     * })
     */
    private $itemPossibleReward2;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_possible_reward_1", referencedColumnName="pk")
     * })
     */
    private $itemPossibleReward1;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_possible_reward_0", referencedColumnName="pk")
     * })
     */
    private $itemPossibleReward0;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_talk_pcwin", referencedColumnName="pk")
     * })
     */
    private $defaultTalkPcwin;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_talk_draw", referencedColumnName="pk")
     * })
     */
    private $defaultTalkDraw;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_talk_npcwin", referencedColumnName="pk")
     * })
     */
    private $defaultTalkNpcwin;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_talk_unavailable", referencedColumnName="pk")
     * })
     */
    private $defaultTalkUnavailable;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_talk_challenge", referencedColumnName="pk")
     * })
     */
    private $defaultTalkChallenge;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="previous_quest_2", referencedColumnName="pk")
     * })
     */
    private $previousQuest2;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="previous_quest_1", referencedColumnName="pk")
     * })
     */
    private $previousQuest1;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="previous_quest_0", referencedColumnName="pk")
     * })
     */
    private $previousQuest0;

    /**
     * @var TripleTriadRule
     *
     * @ORM\ManyToOne(targetEntity="TripleTriadRule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="triple_triad_rule_1", referencedColumnName="pk")
     * })
     */
    private $tripleTriadRule1;

    /**
     * @var TripleTriadRule
     *
     * @ORM\ManyToOne(targetEntity="TripleTriadRule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="triple_triad_rule_0", referencedColumnName="pk")
     * })
     */
    private $tripleTriadRule0;

    /**
     * @var TripleTriadCard
     *
     * @ORM\ManyToOne(targetEntity="TripleTriadCard")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="triple_triad_card_variable_4", referencedColumnName="pk")
     * })
     */
    private $tripleTriadCardVariable4;

    /**
     * @var TripleTriadCard
     *
     * @ORM\ManyToOne(targetEntity="TripleTriadCard")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="triple_triad_card_variable_3", referencedColumnName="pk")
     * })
     */
    private $tripleTriadCardVariable3;

    /**
     * @var TripleTriadCard
     *
     * @ORM\ManyToOne(targetEntity="TripleTriadCard")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="triple_triad_card_variable_2", referencedColumnName="pk")
     * })
     */
    private $tripleTriadCardVariable2;

    /**
     * @var TripleTriadCard
     *
     * @ORM\ManyToOne(targetEntity="TripleTriadCard")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="triple_triad_card_variable_1", referencedColumnName="pk")
     * })
     */
    private $tripleTriadCardVariable1;

    /**
     * @var TripleTriadCard
     *
     * @ORM\ManyToOne(targetEntity="TripleTriadCard")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="triple_triad_card_variable_0", referencedColumnName="pk")
     * })
     */
    private $tripleTriadCardVariable0;

    /**
     * @var TripleTriadCard
     *
     * @ORM\ManyToOne(targetEntity="TripleTriadCard")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="triple_triad_card_fixed_4", referencedColumnName="pk")
     * })
     */
    private $tripleTriadCardFixed4;

    /**
     * @var TripleTriadCard
     *
     * @ORM\ManyToOne(targetEntity="TripleTriadCard")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="triple_triad_card_fixed_3", referencedColumnName="pk")
     * })
     */
    private $tripleTriadCardFixed3;

    /**
     * @var TripleTriadCard
     *
     * @ORM\ManyToOne(targetEntity="TripleTriadCard")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="triple_triad_card_fixed_2", referencedColumnName="pk")
     * })
     */
    private $tripleTriadCardFixed2;

    /**
     * @var TripleTriadCard
     *
     * @ORM\ManyToOne(targetEntity="TripleTriadCard")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="triple_triad_card_fixed_1", referencedColumnName="pk")
     * })
     */
    private $tripleTriadCardFixed1;

    /**
     * @var TripleTriadCard
     *
     * @ORM\ManyToOne(targetEntity="TripleTriadCard")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="triple_triad_card_fixed_0", referencedColumnName="pk")
     * })
     */
    private $tripleTriadCardFixed0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getUsesRegionalRules(): ?bool
    {
        return $this->usesRegionalRules;
    }

    public function setUsesRegionalRules(?bool $usesRegionalRules): self
    {
        $this->usesRegionalRules = $usesRegionalRules;

        return $this;
    }

    public function getFee(): ?string
    {
        return $this->fee;
    }

    public function setFee(?string $fee): self
    {
        $this->fee = $fee;

        return $this;
    }

    public function getPreviousQuestJoin(): ?int
    {
        return $this->previousQuestJoin;
    }

    public function setPreviousQuestJoin(?int $previousQuestJoin): self
    {
        $this->previousQuestJoin = $previousQuestJoin;

        return $this;
    }

    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;

        return $this;
    }

    public function getColumn26(): ?bool
    {
        return $this->column26;
    }

    public function setColumn26(?bool $column26): self
    {
        $this->column26 = $column26;

        return $this;
    }

    public function getItemPossibleReward3(): ?Item
    {
        return $this->itemPossibleReward3;
    }

    public function setItemPossibleReward3(?Item $itemPossibleReward3): self
    {
        $this->itemPossibleReward3 = $itemPossibleReward3;

        return $this;
    }

    public function getItemPossibleReward2(): ?Item
    {
        return $this->itemPossibleReward2;
    }

    public function setItemPossibleReward2(?Item $itemPossibleReward2): self
    {
        $this->itemPossibleReward2 = $itemPossibleReward2;

        return $this;
    }

    public function getItemPossibleReward1(): ?Item
    {
        return $this->itemPossibleReward1;
    }

    public function setItemPossibleReward1(?Item $itemPossibleReward1): self
    {
        $this->itemPossibleReward1 = $itemPossibleReward1;

        return $this;
    }

    public function getItemPossibleReward0(): ?Item
    {
        return $this->itemPossibleReward0;
    }

    public function setItemPossibleReward0(?Item $itemPossibleReward0): self
    {
        $this->itemPossibleReward0 = $itemPossibleReward0;

        return $this;
    }

    public function getDefaultTalkPcwin(): ?DefaultTalk
    {
        return $this->defaultTalkPcwin;
    }

    public function setDefaultTalkPcwin(?DefaultTalk $defaultTalkPcwin): self
    {
        $this->defaultTalkPcwin = $defaultTalkPcwin;

        return $this;
    }

    public function getDefaultTalkDraw(): ?DefaultTalk
    {
        return $this->defaultTalkDraw;
    }

    public function setDefaultTalkDraw(?DefaultTalk $defaultTalkDraw): self
    {
        $this->defaultTalkDraw = $defaultTalkDraw;

        return $this;
    }

    public function getDefaultTalkNpcwin(): ?DefaultTalk
    {
        return $this->defaultTalkNpcwin;
    }

    public function setDefaultTalkNpcwin(?DefaultTalk $defaultTalkNpcwin): self
    {
        $this->defaultTalkNpcwin = $defaultTalkNpcwin;

        return $this;
    }

    public function getDefaultTalkUnavailable(): ?DefaultTalk
    {
        return $this->defaultTalkUnavailable;
    }

    public function setDefaultTalkUnavailable(?DefaultTalk $defaultTalkUnavailable): self
    {
        $this->defaultTalkUnavailable = $defaultTalkUnavailable;

        return $this;
    }

    public function getDefaultTalkChallenge(): ?DefaultTalk
    {
        return $this->defaultTalkChallenge;
    }

    public function setDefaultTalkChallenge(?DefaultTalk $defaultTalkChallenge): self
    {
        $this->defaultTalkChallenge = $defaultTalkChallenge;

        return $this;
    }

    public function getPreviousQuest2(): ?Quest
    {
        return $this->previousQuest2;
    }

    public function setPreviousQuest2(?Quest $previousQuest2): self
    {
        $this->previousQuest2 = $previousQuest2;

        return $this;
    }

    public function getPreviousQuest1(): ?Quest
    {
        return $this->previousQuest1;
    }

    public function setPreviousQuest1(?Quest $previousQuest1): self
    {
        $this->previousQuest1 = $previousQuest1;

        return $this;
    }

    public function getPreviousQuest0(): ?Quest
    {
        return $this->previousQuest0;
    }

    public function setPreviousQuest0(?Quest $previousQuest0): self
    {
        $this->previousQuest0 = $previousQuest0;

        return $this;
    }

    public function getTripleTriadRule1(): ?TripleTriadRule
    {
        return $this->tripleTriadRule1;
    }

    public function setTripleTriadRule1(?TripleTriadRule $tripleTriadRule1): self
    {
        $this->tripleTriadRule1 = $tripleTriadRule1;

        return $this;
    }

    public function getTripleTriadRule0(): ?TripleTriadRule
    {
        return $this->tripleTriadRule0;
    }

    public function setTripleTriadRule0(?TripleTriadRule $tripleTriadRule0): self
    {
        $this->tripleTriadRule0 = $tripleTriadRule0;

        return $this;
    }

    public function getTripleTriadCardVariable4(): ?TripleTriadCard
    {
        return $this->tripleTriadCardVariable4;
    }

    public function setTripleTriadCardVariable4(?TripleTriadCard $tripleTriadCardVariable4): self
    {
        $this->tripleTriadCardVariable4 = $tripleTriadCardVariable4;

        return $this;
    }

    public function getTripleTriadCardVariable3(): ?TripleTriadCard
    {
        return $this->tripleTriadCardVariable3;
    }

    public function setTripleTriadCardVariable3(?TripleTriadCard $tripleTriadCardVariable3): self
    {
        $this->tripleTriadCardVariable3 = $tripleTriadCardVariable3;

        return $this;
    }

    public function getTripleTriadCardVariable2(): ?TripleTriadCard
    {
        return $this->tripleTriadCardVariable2;
    }

    public function setTripleTriadCardVariable2(?TripleTriadCard $tripleTriadCardVariable2): self
    {
        $this->tripleTriadCardVariable2 = $tripleTriadCardVariable2;

        return $this;
    }

    public function getTripleTriadCardVariable1(): ?TripleTriadCard
    {
        return $this->tripleTriadCardVariable1;
    }

    public function setTripleTriadCardVariable1(?TripleTriadCard $tripleTriadCardVariable1): self
    {
        $this->tripleTriadCardVariable1 = $tripleTriadCardVariable1;

        return $this;
    }

    public function getTripleTriadCardVariable0(): ?TripleTriadCard
    {
        return $this->tripleTriadCardVariable0;
    }

    public function setTripleTriadCardVariable0(?TripleTriadCard $tripleTriadCardVariable0): self
    {
        $this->tripleTriadCardVariable0 = $tripleTriadCardVariable0;

        return $this;
    }

    public function getTripleTriadCardFixed4(): ?TripleTriadCard
    {
        return $this->tripleTriadCardFixed4;
    }

    public function setTripleTriadCardFixed4(?TripleTriadCard $tripleTriadCardFixed4): self
    {
        $this->tripleTriadCardFixed4 = $tripleTriadCardFixed4;

        return $this;
    }

    public function getTripleTriadCardFixed3(): ?TripleTriadCard
    {
        return $this->tripleTriadCardFixed3;
    }

    public function setTripleTriadCardFixed3(?TripleTriadCard $tripleTriadCardFixed3): self
    {
        $this->tripleTriadCardFixed3 = $tripleTriadCardFixed3;

        return $this;
    }

    public function getTripleTriadCardFixed2(): ?TripleTriadCard
    {
        return $this->tripleTriadCardFixed2;
    }

    public function setTripleTriadCardFixed2(?TripleTriadCard $tripleTriadCardFixed2): self
    {
        $this->tripleTriadCardFixed2 = $tripleTriadCardFixed2;

        return $this;
    }

    public function getTripleTriadCardFixed1(): ?TripleTriadCard
    {
        return $this->tripleTriadCardFixed1;
    }

    public function setTripleTriadCardFixed1(?TripleTriadCard $tripleTriadCardFixed1): self
    {
        $this->tripleTriadCardFixed1 = $tripleTriadCardFixed1;

        return $this;
    }

    public function getTripleTriadCardFixed0(): ?TripleTriadCard
    {
        return $this->tripleTriadCardFixed0;
    }

    public function setTripleTriadCardFixed0(?TripleTriadCard $tripleTriadCardFixed0): self
    {
        $this->tripleTriadCardFixed0 = $tripleTriadCardFixed0;

        return $this;
    }
}
