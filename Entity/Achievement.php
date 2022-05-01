<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achievement.
 *
 * @ORM\Table(name="achievement", indexes={@ORM\Index(name="idx_96737ff11f1b251e", columns={"item"}), @ORM\Index(name="idx_96737ff1a1786261", columns={"achievement_target"}), @ORM\Index(name="idx_96737ff1eb30883e", columns={"achievement_hide_condition"}), @ORM\Index(name="idx_96737ff1cace37ac", columns={"achievement_category"}), @ORM\Index(name="idx_96737ff12b36786b", columns={"title"})})
 * @ORM\Entity
 */
class Achievement
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="achievement_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=271, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=271, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="integer", nullable=true)
     */
    private $column5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="points", type="integer", nullable=true)
     */
    private $points;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_9", type="integer", nullable=true)
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
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_13", type="integer", nullable=true)
     */
    private $column13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="key", type="integer", nullable=true)
     */
    private $key;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_0", type="integer", nullable=true)
     */
    private $data0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_1", type="integer", nullable=true)
     */
    private $data1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_2", type="integer", nullable=true)
     */
    private $data2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_3", type="integer", nullable=true)
     */
    private $data3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_4", type="integer", nullable=true)
     */
    private $data4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_5", type="integer", nullable=true)
     */
    private $data5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_6", type="integer", nullable=true)
     */
    private $data6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_7", type="integer", nullable=true)
     */
    private $data7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="bigint", nullable=true)
     */
    private $order;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_25", type="integer", nullable=true)
     */
    private $column25;

    /**
     * @var AchievementHideCondition
     *
     * @ORM\ManyToOne(targetEntity="AchievementHideCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_hide_condition", referencedColumnName="pk")
     * })
     */
    private $achievementHideCondition;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item", referencedColumnName="pk")
     * })
     */
    private $item;

    /**
     * @var Title
     *
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="title", referencedColumnName="pk")
     * })
     */
    private $title;

    /**
     * @var AchievementTarget
     *
     * @ORM\ManyToOne(targetEntity="AchievementTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_target", referencedColumnName="pk")
     * })
     */
    private $achievementTarget;

    /**
     * @var AchievementCategory
     *
     * @ORM\ManyToOne(targetEntity="AchievementCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_category", referencedColumnName="pk")
     * })
     */
    private $achievementCategory;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(?int $points): self
    {
        $this->points = $points;

        return $this;
    }

    public function getColumn9(): ?int
    {
        return $this->column9;
    }

    public function setColumn9(?int $column9): self
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

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getColumn13(): ?int
    {
        return $this->column13;
    }

    public function setColumn13(?int $column13): self
    {
        $this->column13 = $column13;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getKey(): ?int
    {
        return $this->key;
    }

    public function setKey(?int $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function getData0(): ?int
    {
        return $this->data0;
    }

    public function setData0(?int $data0): self
    {
        $this->data0 = $data0;

        return $this;
    }

    public function getData1(): ?int
    {
        return $this->data1;
    }

    public function setData1(?int $data1): self
    {
        $this->data1 = $data1;

        return $this;
    }

    public function getData2(): ?int
    {
        return $this->data2;
    }

    public function setData2(?int $data2): self
    {
        $this->data2 = $data2;

        return $this;
    }

    public function getData3(): ?int
    {
        return $this->data3;
    }

    public function setData3(?int $data3): self
    {
        $this->data3 = $data3;

        return $this;
    }

    public function getData4(): ?int
    {
        return $this->data4;
    }

    public function setData4(?int $data4): self
    {
        $this->data4 = $data4;

        return $this;
    }

    public function getData5(): ?int
    {
        return $this->data5;
    }

    public function setData5(?int $data5): self
    {
        $this->data5 = $data5;

        return $this;
    }

    public function getData6(): ?int
    {
        return $this->data6;
    }

    public function setData6(?int $data6): self
    {
        $this->data6 = $data6;

        return $this;
    }

    public function getData7(): ?int
    {
        return $this->data7;
    }

    public function setData7(?int $data7): self
    {
        $this->data7 = $data7;

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

    public function getColumn25(): ?int
    {
        return $this->column25;
    }

    public function setColumn25(?int $column25): self
    {
        $this->column25 = $column25;

        return $this;
    }

    public function getAchievementHideCondition(): ?AchievementHideCondition
    {
        return $this->achievementHideCondition;
    }

    public function setAchievementHideCondition(?AchievementHideCondition $achievementHideCondition): self
    {
        $this->achievementHideCondition = $achievementHideCondition;

        return $this;
    }

    public function getItem(): ?Item
    {
        return $this->item;
    }

    public function setItem(?Item $item): self
    {
        $this->item = $item;

        return $this;
    }

    public function getTitle(): ?Title
    {
        return $this->title;
    }

    public function setTitle(?Title $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAchievementTarget(): ?AchievementTarget
    {
        return $this->achievementTarget;
    }

    public function setAchievementTarget(?AchievementTarget $achievementTarget): self
    {
        $this->achievementTarget = $achievementTarget;

        return $this;
    }

    public function getAchievementCategory(): ?AchievementCategory
    {
        return $this->achievementCategory;
    }

    public function setAchievementCategory(?AchievementCategory $achievementCategory): self
    {
        $this->achievementCategory = $achievementCategory;

        return $this;
    }
}
