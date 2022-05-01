<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RetainerTask.
 *
 * @ORM\Table(name="retainer_task", indexes={@ORM\Index(name="idx_764fccb72ad76541", columns={"retainer_task_parameter"}), @ORM\Index(name="idx_764fccb7ae8947ec", columns={"class_job_category"})})
 * @ORM\Entity
 */
class RetainerTask
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="retainer_task_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_random", type="boolean", nullable=true)
     */
    private $isRandom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="retainer_level", type="integer", nullable=true)
     */
    private $retainerLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="bigint", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="venture_cost", type="bigint", nullable=true)
     */
    private $ventureCost;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_time_min", type="bigint", nullable=true)
     */
    private $maxTimeMin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="experience", type="integer", nullable=true)
     */
    private $experience;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_item_level", type="bigint", nullable=true)
     */
    private $requiredItemLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_param_0", type="integer", nullable=true)
     */
    private $conditionParam0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_param_1", type="integer", nullable=true)
     */
    private $conditionParam1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_gathering", type="bigint", nullable=true)
     */
    private $requiredGathering;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_13", type="bigint", nullable=true)
     */
    private $column13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="task", type="integer", nullable=true)
     */
    private $task;

    /**
     * @var RetainerTaskParameter
     *
     * @ORM\ManyToOne(targetEntity="RetainerTaskParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="retainer_task_parameter", referencedColumnName="pk")
     * })
     */
    private $retainerTaskParameter;

    /**
     * @var ClassJobCategory
     *
     * @ORM\ManyToOne(targetEntity="ClassJobCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job_category", referencedColumnName="pk")
     * })
     */
    private $classJobCategory;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getIsRandom(): ?bool
    {
        return $this->isRandom;
    }

    public function setIsRandom(?bool $isRandom): self
    {
        $this->isRandom = $isRandom;

        return $this;
    }

    public function getRetainerLevel(): ?int
    {
        return $this->retainerLevel;
    }

    public function setRetainerLevel(?int $retainerLevel): self
    {
        $this->retainerLevel = $retainerLevel;

        return $this;
    }

    public function getColumn4(): ?string
    {
        return $this->column4;
    }

    public function setColumn4(?string $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getVentureCost(): ?string
    {
        return $this->ventureCost;
    }

    public function setVentureCost(?string $ventureCost): self
    {
        $this->ventureCost = $ventureCost;

        return $this;
    }

    public function getMaxTimeMin(): ?string
    {
        return $this->maxTimeMin;
    }

    public function setMaxTimeMin(?string $maxTimeMin): self
    {
        $this->maxTimeMin = $maxTimeMin;

        return $this;
    }

    public function getExperience(): ?int
    {
        return $this->experience;
    }

    public function setExperience(?int $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    public function getRequiredItemLevel(): ?string
    {
        return $this->requiredItemLevel;
    }

    public function setRequiredItemLevel(?string $requiredItemLevel): self
    {
        $this->requiredItemLevel = $requiredItemLevel;

        return $this;
    }

    public function getConditionParam0(): ?int
    {
        return $this->conditionParam0;
    }

    public function setConditionParam0(?int $conditionParam0): self
    {
        $this->conditionParam0 = $conditionParam0;

        return $this;
    }

    public function getConditionParam1(): ?int
    {
        return $this->conditionParam1;
    }

    public function setConditionParam1(?int $conditionParam1): self
    {
        $this->conditionParam1 = $conditionParam1;

        return $this;
    }

    public function getRequiredGathering(): ?string
    {
        return $this->requiredGathering;
    }

    public function setRequiredGathering(?string $requiredGathering): self
    {
        $this->requiredGathering = $requiredGathering;

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

    public function getTask(): ?int
    {
        return $this->task;
    }

    public function setTask(?int $task): self
    {
        $this->task = $task;

        return $this;
    }

    public function getRetainerTaskParameter(): ?RetainerTaskParameter
    {
        return $this->retainerTaskParameter;
    }

    public function setRetainerTaskParameter(?RetainerTaskParameter $retainerTaskParameter): self
    {
        $this->retainerTaskParameter = $retainerTaskParameter;

        return $this;
    }

    public function getClassJobCategory(): ?ClassJobCategory
    {
        return $this->classJobCategory;
    }

    public function setClassJobCategory(?ClassJobCategory $classJobCategory): self
    {
        $this->classJobCategory = $classJobCategory;

        return $this;
    }
}
