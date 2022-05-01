<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fcrank.
 *
 * @ORM\Table(name="fcrank")
 * @ORM\Entity
 */
class Fcrank
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fcrank_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="next_point", type="bigint", nullable=true)
     */
    private $nextPoint;

    /**
     * @var int|null
     *
     * @ORM\Column(name="current_point", type="bigint", nullable=true)
     */
    private $currentPoint;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rights", type="bigint", nullable=true)
     */
    private $rights;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="bigint", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="bigint", nullable=true)
     */
    private $column5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fcaction_active_num", type="integer", nullable=true)
     */
    private $fcactionActiveNum;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fcaction_stock_num", type="integer", nullable=true)
     */
    private $fcactionStockNum;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fcchest_compartments", type="integer", nullable=true)
     */
    private $fcchestCompartments;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getNextPoint(): ?string
    {
        return $this->nextPoint;
    }

    public function setNextPoint(?string $nextPoint): self
    {
        $this->nextPoint = $nextPoint;

        return $this;
    }

    public function getCurrentPoint(): ?string
    {
        return $this->currentPoint;
    }

    public function setCurrentPoint(?string $currentPoint): self
    {
        $this->currentPoint = $currentPoint;

        return $this;
    }

    public function getRights(): ?string
    {
        return $this->rights;
    }

    public function setRights(?string $rights): self
    {
        $this->rights = $rights;

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

    public function getColumn5(): ?string
    {
        return $this->column5;
    }

    public function setColumn5(?string $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getFcactionActiveNum(): ?int
    {
        return $this->fcactionActiveNum;
    }

    public function setFcactionActiveNum(?int $fcactionActiveNum): self
    {
        $this->fcactionActiveNum = $fcactionActiveNum;

        return $this;
    }

    public function getFcactionStockNum(): ?int
    {
        return $this->fcactionStockNum;
    }

    public function setFcactionStockNum(?int $fcactionStockNum): self
    {
        $this->fcactionStockNum = $fcactionStockNum;

        return $this;
    }

    public function getFcchestCompartments(): ?int
    {
        return $this->fcchestCompartments;
    }

    public function setFcchestCompartments(?int $fcchestCompartments): self
    {
        $this->fcchestCompartments = $fcchestCompartments;

        return $this;
    }
}
