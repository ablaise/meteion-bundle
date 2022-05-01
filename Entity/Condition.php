<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Condition.
 *
 * @ORM\Table(name="condition", indexes={@ORM\Index(name="idx_bdd688438e7008e8", columns={"log_message"})})
 * @ORM\Entity
 */
class Condition
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="condition_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_1", type="boolean", nullable=true)
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
     * @ORM\Column(name="column_4", type="integer", nullable=true)
     */
    private $column4;

    /**
     * @var LogMessage
     *
     * @ORM\ManyToOne(targetEntity="LogMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="log_message", referencedColumnName="pk")
     * })
     */
    private $logMessage;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?bool
    {
        return $this->column1;
    }

    public function setColumn1(?bool $column1): self
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

    public function getColumn4(): ?int
    {
        return $this->column4;
    }

    public function setColumn4(?int $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getLogMessage(): ?LogMessage
    {
        return $this->logMessage;
    }

    public function setLogMessage(?LogMessage $logMessage): self
    {
        $this->logMessage = $logMessage;

        return $this;
    }
}
