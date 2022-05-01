<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Behavior.
 *
 * @ORM\Table(name="behavior", indexes={@ORM\Index(name="idx_3baba0b0643b3b90", columns={"balloon"})})
 * @ORM\Entity
 */
class Behavior
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="behavior_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
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
     * @ORM\Column(name="condition_0_target", type="integer", nullable=true)
     */
    private $condition0Target;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_0_type", type="integer", nullable=true)
     */
    private $condition0Type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="integer", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="integer", nullable=true)
     */
    private $column7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="bigint", nullable=true)
     */
    private $column8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_9", type="bigint", nullable=true)
     */
    private $column9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_1_target", type="integer", nullable=true)
     */
    private $condition1Target;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_1_type", type="integer", nullable=true)
     */
    private $condition1Type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="content_argument_0", type="bigint", nullable=true)
     */
    private $contentArgument0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="content_argument_1", type="integer", nullable=true)
     */
    private $contentArgument1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_14", type="integer", nullable=true)
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
     * @ORM\Column(name="column_16", type="bigint", nullable=true)
     */
    private $column16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_17", type="bigint", nullable=true)
     */
    private $column17;

    /**
     * @var Balloon
     *
     * @ORM\ManyToOne(targetEntity="Balloon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="balloon", referencedColumnName="pk")
     * })
     */
    private $balloon;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getColumn1(): ?int
    {
        return $this->column1;
    }

    public function setColumn1(?int $column1): self
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

    public function getCondition0Target(): ?int
    {
        return $this->condition0Target;
    }

    public function setCondition0Target(?int $condition0Target): self
    {
        $this->condition0Target = $condition0Target;

        return $this;
    }

    public function getCondition0Type(): ?int
    {
        return $this->condition0Type;
    }

    public function setCondition0Type(?int $condition0Type): self
    {
        $this->condition0Type = $condition0Type;

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

    public function getColumn7(): ?int
    {
        return $this->column7;
    }

    public function setColumn7(?int $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getColumn8(): ?string
    {
        return $this->column8;
    }

    public function setColumn8(?string $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getColumn9(): ?string
    {
        return $this->column9;
    }

    public function setColumn9(?string $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getCondition1Target(): ?int
    {
        return $this->condition1Target;
    }

    public function setCondition1Target(?int $condition1Target): self
    {
        $this->condition1Target = $condition1Target;

        return $this;
    }

    public function getCondition1Type(): ?int
    {
        return $this->condition1Type;
    }

    public function setCondition1Type(?int $condition1Type): self
    {
        $this->condition1Type = $condition1Type;

        return $this;
    }

    public function getContentArgument0(): ?string
    {
        return $this->contentArgument0;
    }

    public function setContentArgument0(?string $contentArgument0): self
    {
        $this->contentArgument0 = $contentArgument0;

        return $this;
    }

    public function getContentArgument1(): ?int
    {
        return $this->contentArgument1;
    }

    public function setContentArgument1(?int $contentArgument1): self
    {
        $this->contentArgument1 = $contentArgument1;

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

    public function getColumn15(): ?int
    {
        return $this->column15;
    }

    public function setColumn15(?int $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }

    public function getColumn16(): ?string
    {
        return $this->column16;
    }

    public function setColumn16(?string $column16): self
    {
        $this->column16 = $column16;

        return $this;
    }

    public function getColumn17(): ?string
    {
        return $this->column17;
    }

    public function setColumn17(?string $column17): self
    {
        $this->column17 = $column17;

        return $this;
    }

    public function getBalloon(): ?Balloon
    {
        return $this->balloon;
    }

    public function setBalloon(?Balloon $balloon): self
    {
        $this->balloon = $balloon;

        return $this;
    }
}
