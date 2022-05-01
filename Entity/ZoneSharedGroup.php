<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZoneSharedGroup.
 *
 * @ORM\Table(name="zone_shared_group", indexes={@ORM\Index(name="idx_496e3b0b9cac2ae8", columns={"quest_5"}), @ORM\Index(name="idx_496e3b0b2c8bf4b", columns={"quest_2"}), @ORM\Index(name="idx_496e3b0b75cf8fdd", columns={"quest_3"}), @ORM\Index(name="idx_496e3b0becc6de67", columns={"quest_0"}), @ORM\Index(name="idx_496e3b0b9bc1eef1", columns={"quest_1"}), @ORM\Index(name="idx_496e3b0bebab1a7e", columns={"quest_4"})})
 * @ORM\Entity
 */
class ZoneSharedGroup
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="zone_shared_group_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_shared_group", type="bigint", nullable=true)
     */
    private $lgbSharedGroup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="integer", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="seq_0", type="bigint", nullable=true)
     */
    private $seq0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_5", type="boolean", nullable=true)
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
     * @ORM\Column(name="seq_1", type="bigint", nullable=true)
     */
    private $seq1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_9", type="boolean", nullable=true)
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
     * @ORM\Column(name="seq_2", type="bigint", nullable=true)
     */
    private $seq2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_13", type="boolean", nullable=true)
     */
    private $column13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_14", type="integer", nullable=true)
     */
    private $column14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="seq_3", type="bigint", nullable=true)
     */
    private $seq3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_17", type="boolean", nullable=true)
     */
    private $column17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_18", type="integer", nullable=true)
     */
    private $column18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="seq_4", type="bigint", nullable=true)
     */
    private $seq4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_21", type="boolean", nullable=true)
     */
    private $column21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_22", type="integer", nullable=true)
     */
    private $column22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="seq_5", type="bigint", nullable=true)
     */
    private $seq5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_25", type="boolean", nullable=true)
     */
    private $column25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_26", type="integer", nullable=true)
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
     * @var bool|null
     *
     * @ORM\Column(name="column_29", type="boolean", nullable=true)
     */
    private $column29;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_5", referencedColumnName="pk")
     * })
     */
    private $quest5;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_4", referencedColumnName="pk")
     * })
     */
    private $quest4;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_3", referencedColumnName="pk")
     * })
     */
    private $quest3;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_2", referencedColumnName="pk")
     * })
     */
    private $quest2;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_1", referencedColumnName="pk")
     * })
     */
    private $quest1;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_0", referencedColumnName="pk")
     * })
     */
    private $quest0;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getLgbSharedGroup(): ?string
    {
        return $this->lgbSharedGroup;
    }

    public function setLgbSharedGroup(?string $lgbSharedGroup): self
    {
        $this->lgbSharedGroup = $lgbSharedGroup;

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

    public function getSeq0(): ?string
    {
        return $this->seq0;
    }

    public function setSeq0(?string $seq0): self
    {
        $this->seq0 = $seq0;

        return $this;
    }

    public function getColumn5(): ?bool
    {
        return $this->column5;
    }

    public function setColumn5(?bool $column5): self
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

    public function getSeq1(): ?string
    {
        return $this->seq1;
    }

    public function setSeq1(?string $seq1): self
    {
        $this->seq1 = $seq1;

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

    public function getColumn10(): ?int
    {
        return $this->column10;
    }

    public function setColumn10(?int $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }

    public function getSeq2(): ?string
    {
        return $this->seq2;
    }

    public function setSeq2(?string $seq2): self
    {
        $this->seq2 = $seq2;

        return $this;
    }

    public function getColumn13(): ?bool
    {
        return $this->column13;
    }

    public function setColumn13(?bool $column13): self
    {
        $this->column13 = $column13;

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

    public function getSeq3(): ?string
    {
        return $this->seq3;
    }

    public function setSeq3(?string $seq3): self
    {
        $this->seq3 = $seq3;

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

    public function getColumn18(): ?int
    {
        return $this->column18;
    }

    public function setColumn18(?int $column18): self
    {
        $this->column18 = $column18;

        return $this;
    }

    public function getSeq4(): ?string
    {
        return $this->seq4;
    }

    public function setSeq4(?string $seq4): self
    {
        $this->seq4 = $seq4;

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

    public function getColumn22(): ?int
    {
        return $this->column22;
    }

    public function setColumn22(?int $column22): self
    {
        $this->column22 = $column22;

        return $this;
    }

    public function getSeq5(): ?string
    {
        return $this->seq5;
    }

    public function setSeq5(?string $seq5): self
    {
        $this->seq5 = $seq5;

        return $this;
    }

    public function getColumn25(): ?bool
    {
        return $this->column25;
    }

    public function setColumn25(?bool $column25): self
    {
        $this->column25 = $column25;

        return $this;
    }

    public function getColumn26(): ?int
    {
        return $this->column26;
    }

    public function setColumn26(?int $column26): self
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

    public function getColumn29(): ?bool
    {
        return $this->column29;
    }

    public function setColumn29(?bool $column29): self
    {
        $this->column29 = $column29;

        return $this;
    }

    public function getQuest5(): ?Quest
    {
        return $this->quest5;
    }

    public function setQuest5(?Quest $quest5): self
    {
        $this->quest5 = $quest5;

        return $this;
    }

    public function getQuest4(): ?Quest
    {
        return $this->quest4;
    }

    public function setQuest4(?Quest $quest4): self
    {
        $this->quest4 = $quest4;

        return $this;
    }

    public function getQuest3(): ?Quest
    {
        return $this->quest3;
    }

    public function setQuest3(?Quest $quest3): self
    {
        $this->quest3 = $quest3;

        return $this;
    }

    public function getQuest2(): ?Quest
    {
        return $this->quest2;
    }

    public function setQuest2(?Quest $quest2): self
    {
        $this->quest2 = $quest2;

        return $this;
    }

    public function getQuest1(): ?Quest
    {
        return $this->quest1;
    }

    public function setQuest1(?Quest $quest1): self
    {
        $this->quest1 = $quest1;

        return $this;
    }

    public function getQuest0(): ?Quest
    {
        return $this->quest0;
    }

    public function setQuest0(?Quest $quest0): self
    {
        $this->quest0 = $quest0;

        return $this;
    }
}
