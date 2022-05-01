<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Companion.
 *
 * @ORM\Table(name="companion", indexes={@ORM\Index(name="idx_1bad2e69d79572d9", columns={"model"}), @ORM\Index(name="idx_1bad2e693baba0b0", columns={"behavior"}), @ORM\Index(name="idx_1bad2e698858ca40", columns={"minion_race"})})
 * @ORM\Entity
 */
class Companion
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="companion_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="singular", type="string", length=255, nullable=true)
     */
    private $singular;

    /**
     * @var int|null
     *
     * @ORM\Column(name="adjective", type="integer", nullable=true)
     */
    private $adjective;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plural", type="string", length=255, nullable=true)
     */
    private $plural;

    /**
     * @var int|null
     *
     * @ORM\Column(name="possessive_pronoun", type="integer", nullable=true)
     */
    private $possessivePronoun;

    /**
     * @var int|null
     *
     * @ORM\Column(name="starts_with_vowel", type="integer", nullable=true)
     */
    private $startsWithVowel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="integer", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pronoun", type="integer", nullable=true)
     */
    private $pronoun;

    /**
     * @var int|null
     *
     * @ORM\Column(name="article", type="integer", nullable=true)
     */
    private $article;

    /**
     * @var int|null
     *
     * @ORM\Column(name="scale", type="integer", nullable=true)
     */
    private $scale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="inactive_idle_0", type="integer", nullable=true)
     */
    private $inactiveIdle0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="inactive_idle_1", type="integer", nullable=true)
     */
    private $inactiveIdle1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="inactive_battle", type="integer", nullable=true)
     */
    private $inactiveBattle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="inactive_wandering", type="integer", nullable=true)
     */
    private $inactiveWandering;

    /**
     * @var int|null
     *
     * @ORM\Column(name="special", type="integer", nullable=true)
     */
    private $special;

    /**
     * @var int|null
     *
     * @ORM\Column(name="wandering_wait", type="integer", nullable=true)
     */
    private $wanderingWait;

    /**
     * @var int|null
     *
     * @ORM\Column(name="priority", type="bigint", nullable=true)
     */
    private $priority;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_19", type="boolean", nullable=true)
     */
    private $column19;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_20", type="boolean", nullable=true)
     */
    private $column20;

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
     * @var bool|null
     *
     * @ORM\Column(name="column_23", type="boolean", nullable=true)
     */
    private $column23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enemy", type="bigint", nullable=true)
     */
    private $enemy;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="battle", type="boolean", nullable=true)
     */
    private $battle;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="roulette", type="boolean", nullable=true)
     */
    private $roulette;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="bigint", nullable=true)
     */
    private $order;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="idle_animation", type="boolean", nullable=true)
     */
    private $idleAnimation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_30", type="integer", nullable=true)
     */
    private $column30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cost", type="integer", nullable=true)
     */
    private $cost;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hp", type="bigint", nullable=true)
     */
    private $hp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_33", type="integer", nullable=true)
     */
    private $column33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="skill_angle", type="bigint", nullable=true)
     */
    private $skillAngle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="skill_cost", type="integer", nullable=true)
     */
    private $skillCost;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_36", type="integer", nullable=true)
     */
    private $column36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_37", type="bigint", nullable=true)
     */
    private $column37;

    /**
     * @var MinionRace
     *
     * @ORM\ManyToOne(targetEntity="MinionRace")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="minion_race", referencedColumnName="pk")
     * })
     */
    private $minionRace;

    /**
     * @var CompanionMove
     *
     * @ORM\ManyToOne(targetEntity="CompanionMove")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="behavior", referencedColumnName="pk")
     * })
     */
    private $behavior;

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

    public function getSingular(): ?string
    {
        return $this->singular;
    }

    public function setSingular(?string $singular): self
    {
        $this->singular = $singular;

        return $this;
    }

    public function getAdjective(): ?int
    {
        return $this->adjective;
    }

    public function setAdjective(?int $adjective): self
    {
        $this->adjective = $adjective;

        return $this;
    }

    public function getPlural(): ?string
    {
        return $this->plural;
    }

    public function setPlural(?string $plural): self
    {
        $this->plural = $plural;

        return $this;
    }

    public function getPossessivePronoun(): ?int
    {
        return $this->possessivePronoun;
    }

    public function setPossessivePronoun(?int $possessivePronoun): self
    {
        $this->possessivePronoun = $possessivePronoun;

        return $this;
    }

    public function getStartsWithVowel(): ?int
    {
        return $this->startsWithVowel;
    }

    public function setStartsWithVowel(?int $startsWithVowel): self
    {
        $this->startsWithVowel = $startsWithVowel;

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

    public function getPronoun(): ?int
    {
        return $this->pronoun;
    }

    public function setPronoun(?int $pronoun): self
    {
        $this->pronoun = $pronoun;

        return $this;
    }

    public function getArticle(): ?int
    {
        return $this->article;
    }

    public function setArticle(?int $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getScale(): ?int
    {
        return $this->scale;
    }

    public function setScale(?int $scale): self
    {
        $this->scale = $scale;

        return $this;
    }

    public function getInactiveIdle0(): ?int
    {
        return $this->inactiveIdle0;
    }

    public function setInactiveIdle0(?int $inactiveIdle0): self
    {
        $this->inactiveIdle0 = $inactiveIdle0;

        return $this;
    }

    public function getInactiveIdle1(): ?int
    {
        return $this->inactiveIdle1;
    }

    public function setInactiveIdle1(?int $inactiveIdle1): self
    {
        $this->inactiveIdle1 = $inactiveIdle1;

        return $this;
    }

    public function getInactiveBattle(): ?int
    {
        return $this->inactiveBattle;
    }

    public function setInactiveBattle(?int $inactiveBattle): self
    {
        $this->inactiveBattle = $inactiveBattle;

        return $this;
    }

    public function getInactiveWandering(): ?int
    {
        return $this->inactiveWandering;
    }

    public function setInactiveWandering(?int $inactiveWandering): self
    {
        $this->inactiveWandering = $inactiveWandering;

        return $this;
    }

    public function getSpecial(): ?int
    {
        return $this->special;
    }

    public function setSpecial(?int $special): self
    {
        $this->special = $special;

        return $this;
    }

    public function getWanderingWait(): ?int
    {
        return $this->wanderingWait;
    }

    public function setWanderingWait(?int $wanderingWait): self
    {
        $this->wanderingWait = $wanderingWait;

        return $this;
    }

    public function getPriority(): ?string
    {
        return $this->priority;
    }

    public function setPriority(?string $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getColumn19(): ?bool
    {
        return $this->column19;
    }

    public function setColumn19(?bool $column19): self
    {
        $this->column19 = $column19;

        return $this;
    }

    public function getColumn20(): ?bool
    {
        return $this->column20;
    }

    public function setColumn20(?bool $column20): self
    {
        $this->column20 = $column20;

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

    public function getColumn23(): ?bool
    {
        return $this->column23;
    }

    public function setColumn23(?bool $column23): self
    {
        $this->column23 = $column23;

        return $this;
    }

    public function getEnemy(): ?string
    {
        return $this->enemy;
    }

    public function setEnemy(?string $enemy): self
    {
        $this->enemy = $enemy;

        return $this;
    }

    public function getBattle(): ?bool
    {
        return $this->battle;
    }

    public function setBattle(?bool $battle): self
    {
        $this->battle = $battle;

        return $this;
    }

    public function getRoulette(): ?bool
    {
        return $this->roulette;
    }

    public function setRoulette(?bool $roulette): self
    {
        $this->roulette = $roulette;

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

    public function getOrder(): ?string
    {
        return $this->order;
    }

    public function setOrder(?string $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getIdleAnimation(): ?bool
    {
        return $this->idleAnimation;
    }

    public function setIdleAnimation(?bool $idleAnimation): self
    {
        $this->idleAnimation = $idleAnimation;

        return $this;
    }

    public function getColumn30(): ?int
    {
        return $this->column30;
    }

    public function setColumn30(?int $column30): self
    {
        $this->column30 = $column30;

        return $this;
    }

    public function getCost(): ?int
    {
        return $this->cost;
    }

    public function setCost(?int $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getHp(): ?string
    {
        return $this->hp;
    }

    public function setHp(?string $hp): self
    {
        $this->hp = $hp;

        return $this;
    }

    public function getColumn33(): ?int
    {
        return $this->column33;
    }

    public function setColumn33(?int $column33): self
    {
        $this->column33 = $column33;

        return $this;
    }

    public function getSkillAngle(): ?string
    {
        return $this->skillAngle;
    }

    public function setSkillAngle(?string $skillAngle): self
    {
        $this->skillAngle = $skillAngle;

        return $this;
    }

    public function getSkillCost(): ?int
    {
        return $this->skillCost;
    }

    public function setSkillCost(?int $skillCost): self
    {
        $this->skillCost = $skillCost;

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

    public function getColumn37(): ?string
    {
        return $this->column37;
    }

    public function setColumn37(?string $column37): self
    {
        $this->column37 = $column37;

        return $this;
    }

    public function getMinionRace(): ?MinionRace
    {
        return $this->minionRace;
    }

    public function setMinionRace(?MinionRace $minionRace): self
    {
        $this->minionRace = $minionRace;

        return $this;
    }

    public function getBehavior(): ?CompanionMove
    {
        return $this->behavior;
    }

    public function setBehavior(?CompanionMove $behavior): self
    {
        $this->behavior = $behavior;

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
