<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScenarioTreeTipsClassQuest.
 *
 * @ORM\Table(name="scenario_tree_tips_class_quest", indexes={@ORM\Index(name="idx_690cbdc09544e3a0", columns={"required_quest"}), @ORM\Index(name="idx_690cbdc04317f817", columns={"quest"}), @ORM\Index(name="idx_690cbdc09e9918b6", columns={"required_expansion"})})
 * @ORM\Entity
 */
class ScenarioTreeTipsClassQuest
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="scenario_tree_tips_class_quest_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_level", type="bigint", nullable=true)
     */
    private $requiredLevel;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_5", type="boolean", nullable=true)
     */
    private $column5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_6", type="boolean", nullable=true)
     */
    private $column6;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_quest", referencedColumnName="pk")
     * })
     */
    private $requiredQuest;

    /**
     * @var ExVersion
     *
     * @ORM\ManyToOne(targetEntity="ExVersion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_expansion", referencedColumnName="pk")
     * })
     */
    private $requiredExpansion;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest", referencedColumnName="pk")
     * })
     */
    private $quest;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getRequiredLevel(): ?string
    {
        return $this->requiredLevel;
    }

    public function setRequiredLevel(?string $requiredLevel): self
    {
        $this->requiredLevel = $requiredLevel;

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

    public function getColumn6(): ?bool
    {
        return $this->column6;
    }

    public function setColumn6(?bool $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getRequiredQuest(): ?Quest
    {
        return $this->requiredQuest;
    }

    public function setRequiredQuest(?Quest $requiredQuest): self
    {
        $this->requiredQuest = $requiredQuest;

        return $this;
    }

    public function getRequiredExpansion(): ?ExVersion
    {
        return $this->requiredExpansion;
    }

    public function setRequiredExpansion(?ExVersion $requiredExpansion): self
    {
        $this->requiredExpansion = $requiredExpansion;

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
