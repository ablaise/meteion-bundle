<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aozreport.
 *
 * @ORM\Table(name="aozreport", indexes={@ORM\Index(name="idx_992f6a1c4ed17253", columns={"reward"})})
 * @ORM\Entity
 */
class Aozreport
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aozreport_pk_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;

    /**
     * @var AozreportReward
     *
     * @ORM\ManyToOne(targetEntity="AozreportReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward", referencedColumnName="pk")
     * })
     */
    private $reward;

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

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(?int $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getReward(): ?AozreportReward
    {
        return $this->reward;
    }

    public function setReward(?AozreportReward $reward): self
    {
        $this->reward = $reward;

        return $this;
    }
}
