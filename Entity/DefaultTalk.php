<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DefaultTalk.
 *
 * @ORM\Table(name="default_talk", indexes={@ORM\Index(name="idx_dad5eebd7163e72f", columns={"action_timeline_pose_0"}), @ORM\Index(name="idx_dad5eebd664d7b9", columns={"action_timeline_pose_1"}), @ORM\Index(name="idx_dad5eebd9f6d8603", columns={"action_timeline_pose_2"})})
 * @ORM\Entity
 */
class DefaultTalk
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="default_talk_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="bigint", nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="integer", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
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
     * @ORM\Column(name="column_12", type="bigint", nullable=true)
     */
    private $column12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_13", type="bigint", nullable=true)
     */
    private $column13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_14", type="bigint", nullable=true)
     */
    private $column14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_15", type="integer", nullable=true)
     */
    private $column15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_16", type="integer", nullable=true)
     */
    private $column16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_17", type="integer", nullable=true)
     */
    private $column17;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_18", type="boolean", nullable=true)
     */
    private $column18;

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
     * @var string|null
     *
     * @ORM\Column(name="text_0", type="string", length=1339, nullable=true)
     */
    private $text0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_1", type="string", length=1339, nullable=true)
     */
    private $text1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_2", type="string", length=1339, nullable=true)
     */
    private $text2;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_timeline_pose_2", referencedColumnName="pk")
     * })
     */
    private $actionTimelinePose2;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_timeline_pose_1", referencedColumnName="pk")
     * })
     */
    private $actionTimelinePose1;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_timeline_pose_0", referencedColumnName="pk")
     * })
     */
    private $actionTimelinePose0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?string
    {
        return $this->column1;
    }

    public function setColumn1(?string $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getColumn2(): ?int
    {
        return $this->column2;
    }

    public function setColumn2(?int $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getColumn3(): ?int
    {
        return $this->column3;
    }

    public function setColumn3(?int $column3): self
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

    public function getColumn12(): ?string
    {
        return $this->column12;
    }

    public function setColumn12(?string $column12): self
    {
        $this->column12 = $column12;

        return $this;
    }

    public function getColumn13(): ?string
    {
        return $this->column13;
    }

    public function setColumn13(?string $column13): self
    {
        $this->column13 = $column13;

        return $this;
    }

    public function getColumn14(): ?string
    {
        return $this->column14;
    }

    public function setColumn14(?string $column14): self
    {
        $this->column14 = $column14;

        return $this;
    }

    public function getColumn15(): ?int
    {
        return $this->column15;
    }

    public function setColumn15(?int $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }

    public function getColumn16(): ?int
    {
        return $this->column16;
    }

    public function setColumn16(?int $column16): self
    {
        $this->column16 = $column16;

        return $this;
    }

    public function getColumn17(): ?int
    {
        return $this->column17;
    }

    public function setColumn17(?int $column17): self
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

    public function getText0(): ?string
    {
        return $this->text0;
    }

    public function setText0(?string $text0): self
    {
        $this->text0 = $text0;

        return $this;
    }

    public function getText1(): ?string
    {
        return $this->text1;
    }

    public function setText1(?string $text1): self
    {
        $this->text1 = $text1;

        return $this;
    }

    public function getText2(): ?string
    {
        return $this->text2;
    }

    public function setText2(?string $text2): self
    {
        $this->text2 = $text2;

        return $this;
    }

    public function getActionTimelinePose2(): ?ActionTimeline
    {
        return $this->actionTimelinePose2;
    }

    public function setActionTimelinePose2(?ActionTimeline $actionTimelinePose2): self
    {
        $this->actionTimelinePose2 = $actionTimelinePose2;

        return $this;
    }

    public function getActionTimelinePose1(): ?ActionTimeline
    {
        return $this->actionTimelinePose1;
    }

    public function setActionTimelinePose1(?ActionTimeline $actionTimelinePose1): self
    {
        $this->actionTimelinePose1 = $actionTimelinePose1;

        return $this;
    }

    public function getActionTimelinePose0(): ?ActionTimeline
    {
        return $this->actionTimelinePose0;
    }

    public function setActionTimelinePose0(?ActionTimeline $actionTimelinePose0): self
    {
        $this->actionTimelinePose0 = $actionTimelinePose0;

        return $this;
    }
}
