<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InstanceContent.
 *
 * @ORM\Table(name="instance_content", indexes={@ORM\Index(name="idx_3951fd6a158f4f99", columns={"instance_content_type"}), @ORM\Index(name="idx_3951fd6ad7378c36", columns={"colosseum"}), @ORM\Index(name="idx_3951fd6aadad26d9", columns={"bgm"}), @ORM\Index(name="idx_3951fd6aac399e67", columns={"instance_content_text_data_boss__end"}), @ORM\Index(name="idx_3951fd6a72d1de93", columns={"instance_content_text_data_objective__start"}), @ORM\Index(name="idx_3951fd6a155edc8", columns={"req_instance"}), @ORM\Index(name="idx_3951fd6a7cd8465a", columns={"win_bgm"}), @ORM\Index(name="idx_3951fd6a14c13286", columns={"instance_content_reward_item"}), @ORM\Index(name="idx_3951fd6aa3eaf4c1", columns={"bnpc_base_boss"}), @ORM\Index(name="idx_3951fd6aec765ad3", columns={"instance_content_buff"}), @ORM\Index(name="idx_3951fd6aafed0ad", columns={"cutscene"}), @ORM\Index(name="idx_3951fd6ae07c4486", columns={"instance_content_text_data_boss__start"}), @ORM\Index(name="idx_3951fd6ad2bae92b", columns={"instance_content_text_data_objective__end"})})
 * @ORM\Entity
 */
class InstanceContent
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="instance_content_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="week_restriction", type="integer", nullable=true)
     */
    private $weekRestriction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_limit_min", type="bigint", nullable=true)
     */
    private $timeLimitMin;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_4", type="boolean", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgbevent_range", type="bigint", nullable=true)
     */
    private $lgbeventRange;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="bigint", nullable=true)
     */
    private $order;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_11", type="boolean", nullable=true)
     */
    private $column11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_key", type="bigint", nullable=true)
     */
    private $sortKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="new_player_bonus_gil", type="bigint", nullable=true)
     */
    private $newPlayerBonusGil;

    /**
     * @var int|null
     *
     * @ORM\Column(name="new_player_bonus_exp", type="bigint", nullable=true)
     */
    private $newPlayerBonusExp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="new_player_bonus_a", type="bigint", nullable=true)
     */
    private $newPlayerBonusA;

    /**
     * @var int|null
     *
     * @ORM\Column(name="new_player_bonus_b", type="bigint", nullable=true)
     */
    private $newPlayerBonusB;

    /**
     * @var int|null
     *
     * @ORM\Column(name="final_boss_exp", type="bigint", nullable=true)
     */
    private $finalBossExp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_23", type="bigint", nullable=true)
     */
    private $column23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="final_boss_currency_a", type="bigint", nullable=true)
     */
    private $finalBossCurrencyA;

    /**
     * @var int|null
     *
     * @ORM\Column(name="final_boss_currency_b", type="bigint", nullable=true)
     */
    private $finalBossCurrencyB;

    /**
     * @var int|null
     *
     * @ORM\Column(name="final_boss_currency_c", type="bigint", nullable=true)
     */
    private $finalBossCurrencyC;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_exp_0", type="bigint", nullable=true)
     */
    private $bossExp0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_exp_1", type="bigint", nullable=true)
     */
    private $bossExp1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_exp_2", type="bigint", nullable=true)
     */
    private $bossExp2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_exp_3", type="bigint", nullable=true)
     */
    private $bossExp3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_exp_4", type="bigint", nullable=true)
     */
    private $bossExp4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_currency_a_0", type="bigint", nullable=true)
     */
    private $bossCurrencyA0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_currency_a_1", type="bigint", nullable=true)
     */
    private $bossCurrencyA1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_currency_a_2", type="bigint", nullable=true)
     */
    private $bossCurrencyA2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_currency_a_3", type="bigint", nullable=true)
     */
    private $bossCurrencyA3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_currency_a_4", type="bigint", nullable=true)
     */
    private $bossCurrencyA4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_currency_b_0", type="bigint", nullable=true)
     */
    private $bossCurrencyB0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_currency_b_1", type="bigint", nullable=true)
     */
    private $bossCurrencyB1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_currency_b_2", type="bigint", nullable=true)
     */
    private $bossCurrencyB2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_currency_b_3", type="bigint", nullable=true)
     */
    private $bossCurrencyB3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_currency_b_4", type="bigint", nullable=true)
     */
    private $bossCurrencyB4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_currency_c_0", type="bigint", nullable=true)
     */
    private $bossCurrencyC0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_currency_c_1", type="bigint", nullable=true)
     */
    private $bossCurrencyC1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_currency_c_2", type="bigint", nullable=true)
     */
    private $bossCurrencyC2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_currency_c_3", type="bigint", nullable=true)
     */
    private $bossCurrencyC3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boss_currency_c_4", type="bigint", nullable=true)
     */
    private $bossCurrencyC4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="instance_clear_exp", type="bigint", nullable=true)
     */
    private $instanceClearExp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="instance_clear_gil", type="bigint", nullable=true)
     */
    private $instanceClearGil;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_50", type="integer", nullable=true)
     */
    private $column50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_51", type="bigint", nullable=true)
     */
    private $column51;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_53", type="boolean", nullable=true)
     */
    private $column53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="party_condition", type="integer", nullable=true)
     */
    private $partyCondition;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_56", type="integer", nullable=true)
     */
    private $column56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_57", type="integer", nullable=true)
     */
    private $column57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_58", type="integer", nullable=true)
     */
    private $column58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_59", type="integer", nullable=true)
     */
    private $column59;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_60", type="boolean", nullable=true)
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
     * @ORM\Column(name="column_63", type="integer", nullable=true)
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
     * @var bool|null
     *
     * @ORM\Column(name="column_66", type="boolean", nullable=true)
     */
    private $column66;

    /**
     * @var InstanceContent
     *
     * @ORM\ManyToOne(targetEntity="InstanceContent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="req_instance", referencedColumnName="pk")
     * })
     */
    private $reqInstance;

    /**
     * @var InstanceContentBuff
     *
     * @ORM\ManyToOne(targetEntity="InstanceContentBuff")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instance_content_buff", referencedColumnName="pk")
     * })
     */
    private $instanceContentBuff;

    /**
     * @var InstanceContentRewardItem
     *
     * @ORM\ManyToOne(targetEntity="InstanceContentRewardItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instance_content_reward_item", referencedColumnName="pk")
     * })
     */
    private $instanceContentRewardItem;

    /**
     * @var InstanceContentTextData
     *
     * @ORM\ManyToOne(targetEntity="InstanceContentTextData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instance_content_text_data_objective__end", referencedColumnName="pk")
     * })
     */
    private $instanceContentTextDataObjectiveEnd;

    /**
     * @var InstanceContentTextData
     *
     * @ORM\ManyToOne(targetEntity="InstanceContentTextData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instance_content_text_data_objective__start", referencedColumnName="pk")
     * })
     */
    private $instanceContentTextDataObjectiveStart;

    /**
     * @var BnpcBase
     *
     * @ORM\ManyToOne(targetEntity="BnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_base_boss", referencedColumnName="pk")
     * })
     */
    private $bnpcBaseBoss;

    /**
     * @var InstanceContentTextData
     *
     * @ORM\ManyToOne(targetEntity="InstanceContentTextData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instance_content_text_data_boss__end", referencedColumnName="pk")
     * })
     */
    private $instanceContentTextDataBossEnd;

    /**
     * @var InstanceContentTextData
     *
     * @ORM\ManyToOne(targetEntity="InstanceContentTextData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instance_content_text_data_boss__start", referencedColumnName="pk")
     * })
     */
    private $instanceContentTextDataBossStart;

    /**
     * @var Colosseum
     *
     * @ORM\ManyToOne(targetEntity="Colosseum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="colosseum", referencedColumnName="pk")
     * })
     */
    private $colosseum;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene", referencedColumnName="pk")
     * })
     */
    private $cutscene;

    /**
     * @var Bgm
     *
     * @ORM\ManyToOne(targetEntity="Bgm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="win_bgm", referencedColumnName="pk")
     * })
     */
    private $winBgm;

    /**
     * @var Bgm
     *
     * @ORM\ManyToOne(targetEntity="Bgm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bgm", referencedColumnName="pk")
     * })
     */
    private $bgm;

    /**
     * @var InstanceContentType
     *
     * @ORM\ManyToOne(targetEntity="InstanceContentType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instance_content_type", referencedColumnName="pk")
     * })
     */
    private $instanceContentType;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getWeekRestriction(): ?int
    {
        return $this->weekRestriction;
    }

    public function setWeekRestriction(?int $weekRestriction): self
    {
        $this->weekRestriction = $weekRestriction;

        return $this;
    }

    public function getTimeLimitMin(): ?string
    {
        return $this->timeLimitMin;
    }

    public function setTimeLimitMin(?string $timeLimitMin): self
    {
        $this->timeLimitMin = $timeLimitMin;

        return $this;
    }

    public function getColumn4(): ?bool
    {
        return $this->column4;
    }

    public function setColumn4(?bool $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getLgbeventRange(): ?string
    {
        return $this->lgbeventRange;
    }

    public function setLgbeventRange(?string $lgbeventRange): self
    {
        $this->lgbeventRange = $lgbeventRange;

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

    public function getColumn11(): ?bool
    {
        return $this->column11;
    }

    public function setColumn11(?bool $column11): self
    {
        $this->column11 = $column11;

        return $this;
    }

    public function getSortKey(): ?string
    {
        return $this->sortKey;
    }

    public function setSortKey(?string $sortKey): self
    {
        $this->sortKey = $sortKey;

        return $this;
    }

    public function getNewPlayerBonusGil(): ?string
    {
        return $this->newPlayerBonusGil;
    }

    public function setNewPlayerBonusGil(?string $newPlayerBonusGil): self
    {
        $this->newPlayerBonusGil = $newPlayerBonusGil;

        return $this;
    }

    public function getNewPlayerBonusExp(): ?string
    {
        return $this->newPlayerBonusExp;
    }

    public function setNewPlayerBonusExp(?string $newPlayerBonusExp): self
    {
        $this->newPlayerBonusExp = $newPlayerBonusExp;

        return $this;
    }

    public function getNewPlayerBonusA(): ?string
    {
        return $this->newPlayerBonusA;
    }

    public function setNewPlayerBonusA(?string $newPlayerBonusA): self
    {
        $this->newPlayerBonusA = $newPlayerBonusA;

        return $this;
    }

    public function getNewPlayerBonusB(): ?string
    {
        return $this->newPlayerBonusB;
    }

    public function setNewPlayerBonusB(?string $newPlayerBonusB): self
    {
        $this->newPlayerBonusB = $newPlayerBonusB;

        return $this;
    }

    public function getFinalBossExp(): ?string
    {
        return $this->finalBossExp;
    }

    public function setFinalBossExp(?string $finalBossExp): self
    {
        $this->finalBossExp = $finalBossExp;

        return $this;
    }

    public function getColumn23(): ?string
    {
        return $this->column23;
    }

    public function setColumn23(?string $column23): self
    {
        $this->column23 = $column23;

        return $this;
    }

    public function getFinalBossCurrencyA(): ?string
    {
        return $this->finalBossCurrencyA;
    }

    public function setFinalBossCurrencyA(?string $finalBossCurrencyA): self
    {
        $this->finalBossCurrencyA = $finalBossCurrencyA;

        return $this;
    }

    public function getFinalBossCurrencyB(): ?string
    {
        return $this->finalBossCurrencyB;
    }

    public function setFinalBossCurrencyB(?string $finalBossCurrencyB): self
    {
        $this->finalBossCurrencyB = $finalBossCurrencyB;

        return $this;
    }

    public function getFinalBossCurrencyC(): ?string
    {
        return $this->finalBossCurrencyC;
    }

    public function setFinalBossCurrencyC(?string $finalBossCurrencyC): self
    {
        $this->finalBossCurrencyC = $finalBossCurrencyC;

        return $this;
    }

    public function getBossExp0(): ?string
    {
        return $this->bossExp0;
    }

    public function setBossExp0(?string $bossExp0): self
    {
        $this->bossExp0 = $bossExp0;

        return $this;
    }

    public function getBossExp1(): ?string
    {
        return $this->bossExp1;
    }

    public function setBossExp1(?string $bossExp1): self
    {
        $this->bossExp1 = $bossExp1;

        return $this;
    }

    public function getBossExp2(): ?string
    {
        return $this->bossExp2;
    }

    public function setBossExp2(?string $bossExp2): self
    {
        $this->bossExp2 = $bossExp2;

        return $this;
    }

    public function getBossExp3(): ?string
    {
        return $this->bossExp3;
    }

    public function setBossExp3(?string $bossExp3): self
    {
        $this->bossExp3 = $bossExp3;

        return $this;
    }

    public function getBossExp4(): ?string
    {
        return $this->bossExp4;
    }

    public function setBossExp4(?string $bossExp4): self
    {
        $this->bossExp4 = $bossExp4;

        return $this;
    }

    public function getBossCurrencyA0(): ?string
    {
        return $this->bossCurrencyA0;
    }

    public function setBossCurrencyA0(?string $bossCurrencyA0): self
    {
        $this->bossCurrencyA0 = $bossCurrencyA0;

        return $this;
    }

    public function getBossCurrencyA1(): ?string
    {
        return $this->bossCurrencyA1;
    }

    public function setBossCurrencyA1(?string $bossCurrencyA1): self
    {
        $this->bossCurrencyA1 = $bossCurrencyA1;

        return $this;
    }

    public function getBossCurrencyA2(): ?string
    {
        return $this->bossCurrencyA2;
    }

    public function setBossCurrencyA2(?string $bossCurrencyA2): self
    {
        $this->bossCurrencyA2 = $bossCurrencyA2;

        return $this;
    }

    public function getBossCurrencyA3(): ?string
    {
        return $this->bossCurrencyA3;
    }

    public function setBossCurrencyA3(?string $bossCurrencyA3): self
    {
        $this->bossCurrencyA3 = $bossCurrencyA3;

        return $this;
    }

    public function getBossCurrencyA4(): ?string
    {
        return $this->bossCurrencyA4;
    }

    public function setBossCurrencyA4(?string $bossCurrencyA4): self
    {
        $this->bossCurrencyA4 = $bossCurrencyA4;

        return $this;
    }

    public function getBossCurrencyB0(): ?string
    {
        return $this->bossCurrencyB0;
    }

    public function setBossCurrencyB0(?string $bossCurrencyB0): self
    {
        $this->bossCurrencyB0 = $bossCurrencyB0;

        return $this;
    }

    public function getBossCurrencyB1(): ?string
    {
        return $this->bossCurrencyB1;
    }

    public function setBossCurrencyB1(?string $bossCurrencyB1): self
    {
        $this->bossCurrencyB1 = $bossCurrencyB1;

        return $this;
    }

    public function getBossCurrencyB2(): ?string
    {
        return $this->bossCurrencyB2;
    }

    public function setBossCurrencyB2(?string $bossCurrencyB2): self
    {
        $this->bossCurrencyB2 = $bossCurrencyB2;

        return $this;
    }

    public function getBossCurrencyB3(): ?string
    {
        return $this->bossCurrencyB3;
    }

    public function setBossCurrencyB3(?string $bossCurrencyB3): self
    {
        $this->bossCurrencyB3 = $bossCurrencyB3;

        return $this;
    }

    public function getBossCurrencyB4(): ?string
    {
        return $this->bossCurrencyB4;
    }

    public function setBossCurrencyB4(?string $bossCurrencyB4): self
    {
        $this->bossCurrencyB4 = $bossCurrencyB4;

        return $this;
    }

    public function getBossCurrencyC0(): ?string
    {
        return $this->bossCurrencyC0;
    }

    public function setBossCurrencyC0(?string $bossCurrencyC0): self
    {
        $this->bossCurrencyC0 = $bossCurrencyC0;

        return $this;
    }

    public function getBossCurrencyC1(): ?string
    {
        return $this->bossCurrencyC1;
    }

    public function setBossCurrencyC1(?string $bossCurrencyC1): self
    {
        $this->bossCurrencyC1 = $bossCurrencyC1;

        return $this;
    }

    public function getBossCurrencyC2(): ?string
    {
        return $this->bossCurrencyC2;
    }

    public function setBossCurrencyC2(?string $bossCurrencyC2): self
    {
        $this->bossCurrencyC2 = $bossCurrencyC2;

        return $this;
    }

    public function getBossCurrencyC3(): ?string
    {
        return $this->bossCurrencyC3;
    }

    public function setBossCurrencyC3(?string $bossCurrencyC3): self
    {
        $this->bossCurrencyC3 = $bossCurrencyC3;

        return $this;
    }

    public function getBossCurrencyC4(): ?string
    {
        return $this->bossCurrencyC4;
    }

    public function setBossCurrencyC4(?string $bossCurrencyC4): self
    {
        $this->bossCurrencyC4 = $bossCurrencyC4;

        return $this;
    }

    public function getInstanceClearExp(): ?string
    {
        return $this->instanceClearExp;
    }

    public function setInstanceClearExp(?string $instanceClearExp): self
    {
        $this->instanceClearExp = $instanceClearExp;

        return $this;
    }

    public function getInstanceClearGil(): ?string
    {
        return $this->instanceClearGil;
    }

    public function setInstanceClearGil(?string $instanceClearGil): self
    {
        $this->instanceClearGil = $instanceClearGil;

        return $this;
    }

    public function getColumn50(): ?int
    {
        return $this->column50;
    }

    public function setColumn50(?int $column50): self
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

    public function getColumn53(): ?bool
    {
        return $this->column53;
    }

    public function setColumn53(?bool $column53): self
    {
        $this->column53 = $column53;

        return $this;
    }

    public function getPartyCondition(): ?int
    {
        return $this->partyCondition;
    }

    public function setPartyCondition(?int $partyCondition): self
    {
        $this->partyCondition = $partyCondition;

        return $this;
    }

    public function getColumn56(): ?int
    {
        return $this->column56;
    }

    public function setColumn56(?int $column56): self
    {
        $this->column56 = $column56;

        return $this;
    }

    public function getColumn57(): ?int
    {
        return $this->column57;
    }

    public function setColumn57(?int $column57): self
    {
        $this->column57 = $column57;

        return $this;
    }

    public function getColumn58(): ?int
    {
        return $this->column58;
    }

    public function setColumn58(?int $column58): self
    {
        $this->column58 = $column58;

        return $this;
    }

    public function getColumn59(): ?int
    {
        return $this->column59;
    }

    public function setColumn59(?int $column59): self
    {
        $this->column59 = $column59;

        return $this;
    }

    public function getColumn60(): ?bool
    {
        return $this->column60;
    }

    public function setColumn60(?bool $column60): self
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

    public function getColumn63(): ?int
    {
        return $this->column63;
    }

    public function setColumn63(?int $column63): self
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

    public function getColumn66(): ?bool
    {
        return $this->column66;
    }

    public function setColumn66(?bool $column66): self
    {
        $this->column66 = $column66;

        return $this;
    }

    public function getReqInstance(): ?self
    {
        return $this->reqInstance;
    }

    public function setReqInstance(?self $reqInstance): self
    {
        $this->reqInstance = $reqInstance;

        return $this;
    }

    public function getInstanceContentBuff(): ?InstanceContentBuff
    {
        return $this->instanceContentBuff;
    }

    public function setInstanceContentBuff(?InstanceContentBuff $instanceContentBuff): self
    {
        $this->instanceContentBuff = $instanceContentBuff;

        return $this;
    }

    public function getInstanceContentRewardItem(): ?InstanceContentRewardItem
    {
        return $this->instanceContentRewardItem;
    }

    public function setInstanceContentRewardItem(?InstanceContentRewardItem $instanceContentRewardItem): self
    {
        $this->instanceContentRewardItem = $instanceContentRewardItem;

        return $this;
    }

    public function getInstanceContentTextDataObjectiveEnd(): ?InstanceContentTextData
    {
        return $this->instanceContentTextDataObjectiveEnd;
    }

    public function setInstanceContentTextDataObjectiveEnd(?InstanceContentTextData $instanceContentTextDataObjectiveEnd): self
    {
        $this->instanceContentTextDataObjectiveEnd = $instanceContentTextDataObjectiveEnd;

        return $this;
    }

    public function getInstanceContentTextDataObjectiveStart(): ?InstanceContentTextData
    {
        return $this->instanceContentTextDataObjectiveStart;
    }

    public function setInstanceContentTextDataObjectiveStart(?InstanceContentTextData $instanceContentTextDataObjectiveStart): self
    {
        $this->instanceContentTextDataObjectiveStart = $instanceContentTextDataObjectiveStart;

        return $this;
    }

    public function getBnpcBaseBoss(): ?BnpcBase
    {
        return $this->bnpcBaseBoss;
    }

    public function setBnpcBaseBoss(?BnpcBase $bnpcBaseBoss): self
    {
        $this->bnpcBaseBoss = $bnpcBaseBoss;

        return $this;
    }

    public function getInstanceContentTextDataBossEnd(): ?InstanceContentTextData
    {
        return $this->instanceContentTextDataBossEnd;
    }

    public function setInstanceContentTextDataBossEnd(?InstanceContentTextData $instanceContentTextDataBossEnd): self
    {
        $this->instanceContentTextDataBossEnd = $instanceContentTextDataBossEnd;

        return $this;
    }

    public function getInstanceContentTextDataBossStart(): ?InstanceContentTextData
    {
        return $this->instanceContentTextDataBossStart;
    }

    public function setInstanceContentTextDataBossStart(?InstanceContentTextData $instanceContentTextDataBossStart): self
    {
        $this->instanceContentTextDataBossStart = $instanceContentTextDataBossStart;

        return $this;
    }

    public function getColosseum(): ?Colosseum
    {
        return $this->colosseum;
    }

    public function setColosseum(?Colosseum $colosseum): self
    {
        $this->colosseum = $colosseum;

        return $this;
    }

    public function getCutscene(): ?Cutscene
    {
        return $this->cutscene;
    }

    public function setCutscene(?Cutscene $cutscene): self
    {
        $this->cutscene = $cutscene;

        return $this;
    }

    public function getWinBgm(): ?Bgm
    {
        return $this->winBgm;
    }

    public function setWinBgm(?Bgm $winBgm): self
    {
        $this->winBgm = $winBgm;

        return $this;
    }

    public function getBgm(): ?Bgm
    {
        return $this->bgm;
    }

    public function setBgm(?Bgm $bgm): self
    {
        $this->bgm = $bgm;

        return $this;
    }

    public function getInstanceContentType(): ?InstanceContentType
    {
        return $this->instanceContentType;
    }

    public function setInstanceContentType(?InstanceContentType $instanceContentType): self
    {
        $this->instanceContentType = $instanceContentType;

        return $this;
    }
}
