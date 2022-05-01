<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScenarioTree.
 *
 * @ORM\Table(name="scenario_tree", indexes={@ORM\Index(name="idx_d7f388e0d185917f", columns={"addon"}), @ORM\Index(name="idx_d7f388e08cde5729", columns={"type"}), @ORM\Index(name="idx_d7f388e0ada60865", columns={"quest_chapter"})})
 * @ORM\Entity
 */
class ScenarioTree
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="scenario_tree_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="bigint", nullable=true)
     */
    private $column2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="integer", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="bigint", nullable=true)
     */
    private $column7;

    /**
     * @var QuestChapter
     *
     * @ORM\ManyToOne(targetEntity="QuestChapter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_chapter", referencedColumnName="pk")
     * })
     */
    private $questChapter;

    /**
     * @var Addon
     *
     * @ORM\ManyToOne(targetEntity="Addon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="addon", referencedColumnName="pk")
     * })
     */
    private $addon;

    /**
     * @var ScenarioType
     *
     * @ORM\ManyToOne(targetEntity="ScenarioType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type", referencedColumnName="pk")
     * })
     */
    private $type;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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

    public function getColumn7(): ?string
    {
        return $this->column7;
    }

    public function setColumn7(?string $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getQuestChapter(): ?QuestChapter
    {
        return $this->questChapter;
    }

    public function setQuestChapter(?QuestChapter $questChapter): self
    {
        $this->questChapter = $questChapter;

        return $this;
    }

    public function getAddon(): ?Addon
    {
        return $this->addon;
    }

    public function setAddon(?Addon $addon): self
    {
        $this->addon = $addon;

        return $this;
    }

    public function getType(): ?ScenarioType
    {
        return $this->type;
    }

    public function setType(?ScenarioType $type): self
    {
        $this->type = $type;

        return $this;
    }
}
