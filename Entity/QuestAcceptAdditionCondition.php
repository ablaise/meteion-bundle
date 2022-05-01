<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestAcceptAdditionCondition.
 *
 * @ORM\Table(name="quest_accept_addition_condition", indexes={@ORM\Index(name="idx_d306bb0bfb9940d8", columns={"requirement_0"}), @ORM\Index(name="idx_d306bb0b8c9e704e", columns={"requirement_1"})})
 * @ORM\Entity
 */
class QuestAcceptAdditionCondition
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="quest_accept_addition_condition_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="bigint", nullable=true)
     */
    private $column3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_4", type="boolean", nullable=true)
     */
    private $column4;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="requirement_1", referencedColumnName="pk")
     * })
     */
    private $requirement1;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="requirement_0", referencedColumnName="pk")
     * })
     */
    private $requirement0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn3(): ?string
    {
        return $this->column3;
    }

    public function setColumn3(?string $column3): self
    {
        $this->column3 = $column3;

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

    public function getRequirement1(): ?Quest
    {
        return $this->requirement1;
    }

    public function setRequirement1(?Quest $requirement1): self
    {
        $this->requirement1 = $requirement1;

        return $this;
    }

    public function getRequirement0(): ?Quest
    {
        return $this->requirement0;
    }

    public function setRequirement0(?Quest $requirement0): self
    {
        $this->requirement0 = $requirement0;

        return $this;
    }
}
