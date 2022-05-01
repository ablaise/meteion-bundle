<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildleveAssignment.
 *
 * @ORM\Table(name="guildleve_assignment", indexes={@ORM\Index(name="idx_ec87f41ecc6de67", columns={"quest_0"}), @ORM\Index(name="idx_ec87f41c4221827", columns={"assignment_talk"}), @ORM\Index(name="idx_ec87f419bc1eef1", columns={"quest_1"})})
 * @ORM\Entity
 */
class GuildleveAssignment
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="guildleve_assignment_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="integer", nullable=true)
     */
    private $column2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_6", type="boolean", nullable=true)
     */
    private $column6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_7", type="boolean", nullable=true)
     */
    private $column7;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_8", type="boolean", nullable=true)
     */
    private $column8;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_9", type="boolean", nullable=true)
     */
    private $column9;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_10", type="boolean", nullable=true)
     */
    private $column10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_11", type="integer", nullable=true)
     */
    private $column11;

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

    /**
     * @var GuildleveAssignmentTalk
     *
     * @ORM\ManyToOne(targetEntity="GuildleveAssignmentTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="assignment_talk", referencedColumnName="pk")
     * })
     */
    private $assignmentTalk;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

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

    public function getColumn6(): ?bool
    {
        return $this->column6;
    }

    public function setColumn6(?bool $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getColumn7(): ?bool
    {
        return $this->column7;
    }

    public function setColumn7(?bool $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getColumn8(): ?bool
    {
        return $this->column8;
    }

    public function setColumn8(?bool $column8): self
    {
        $this->column8 = $column8;

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

    public function getColumn10(): ?bool
    {
        return $this->column10;
    }

    public function setColumn10(?bool $column10): self
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

    public function getAssignmentTalk(): ?GuildleveAssignmentTalk
    {
        return $this->assignmentTalk;
    }

    public function setAssignmentTalk(?GuildleveAssignmentTalk $assignmentTalk): self
    {
        $this->assignmentTalk = $assignmentTalk;

        return $this;
    }
}
