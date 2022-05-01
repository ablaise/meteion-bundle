<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestRedoChapterUi.
 *
 * @ORM\Table(name="quest_redo_chapter_ui", indexes={@ORM\Index(name="idx_c001416d4317f817", columns={"quest"}), @ORM\Index(name="idx_c001416d3d9cba35", columns={"uitab"}), @ORM\Index(name="idx_c001416d64c19c1", columns={"category"})})
 * @ORM\Entity
 */
class QuestRedoChapterUi
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="quest_redo_chapter_ui_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="bigint", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="integer", nullable=true)
     */
    private $column5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_redo_uismall", type="integer", nullable=true)
     */
    private $questRedoUismall;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_redo_uilarge", type="integer", nullable=true)
     */
    private $questRedoUilarge;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_redo_uiwide", type="integer", nullable=true)
     */
    private $questRedoUiwide;

    /**
     * @var string|null
     *
     * @ORM\Column(name="chapter_name", type="string", length=642, nullable=true)
     */
    private $chapterName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="chapter_part", type="string", length=642, nullable=true)
     */
    private $chapterPart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transient", type="string", length=642, nullable=true)
     */
    private $transient;

    /**
     * @var QuestRedoChapterUicategory
     *
     * @ORM\ManyToOne(targetEntity="QuestRedoChapterUicategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category", referencedColumnName="pk")
     * })
     */
    private $category;

    /**
     * @var QuestRedoChapterUitab
     *
     * @ORM\ManyToOne(targetEntity="QuestRedoChapterUitab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uitab", referencedColumnName="pk")
     * })
     */
    private $uitab;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest", referencedColumnName="pk")
     * })
     */
    private $quest;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn2(): ?string
    {
        return $this->column2;
    }

    public function setColumn2(?string $column2): self
    {
        $this->column2 = $column2;

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

    public function getQuestRedoUismall(): ?int
    {
        return $this->questRedoUismall;
    }

    public function setQuestRedoUismall(?int $questRedoUismall): self
    {
        $this->questRedoUismall = $questRedoUismall;

        return $this;
    }

    public function getQuestRedoUilarge(): ?int
    {
        return $this->questRedoUilarge;
    }

    public function setQuestRedoUilarge(?int $questRedoUilarge): self
    {
        $this->questRedoUilarge = $questRedoUilarge;

        return $this;
    }

    public function getQuestRedoUiwide(): ?int
    {
        return $this->questRedoUiwide;
    }

    public function setQuestRedoUiwide(?int $questRedoUiwide): self
    {
        $this->questRedoUiwide = $questRedoUiwide;

        return $this;
    }

    public function getChapterName(): ?string
    {
        return $this->chapterName;
    }

    public function setChapterName(?string $chapterName): self
    {
        $this->chapterName = $chapterName;

        return $this;
    }

    public function getChapterPart(): ?string
    {
        return $this->chapterPart;
    }

    public function setChapterPart(?string $chapterPart): self
    {
        $this->chapterPart = $chapterPart;

        return $this;
    }

    public function getTransient(): ?string
    {
        return $this->transient;
    }

    public function setTransient(?string $transient): self
    {
        $this->transient = $transient;

        return $this;
    }

    public function getCategory(): ?QuestRedoChapterUicategory
    {
        return $this->category;
    }

    public function setCategory(?QuestRedoChapterUicategory $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getUitab(): ?QuestRedoChapterUitab
    {
        return $this->uitab;
    }

    public function setUitab(?QuestRedoChapterUitab $uitab): self
    {
        $this->uitab = $uitab;

        return $this;
    }

    public function getQuest(): ?Quest
    {
        return $this->quest;
    }

    public function setQuest(?Quest $quest): self
    {
        $this->quest = $quest;

        return $this;
    }
}
