<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScenarioTreeTips.
 *
 * @ORM\Table(name="scenario_tree_tips", indexes={@ORM\Index(name="idx_40cbf649146a1a7e", columns={"tips2"})})
 * @ORM\Entity
 */
class ScenarioTreeTips
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="scenario_tree_tips_pk_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="tips1", type="integer", nullable=true)
     */
    private $tips1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="bigint", nullable=true)
     */
    private $column3;

    /**
     * @var ScenarioTree
     *
     * @ORM\ManyToOne(targetEntity="ScenarioTree")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tips2", referencedColumnName="pk")
     * })
     */
    private $tips2;

    public function getPk(): ?int
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

    public function getTips1(): ?int
    {
        return $this->tips1;
    }

    public function setTips1(?int $tips1): self
    {
        $this->tips1 = $tips1;

        return $this;
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

    public function getTips2(): ?ScenarioTree
    {
        return $this->tips2;
    }

    public function setTips2(?ScenarioTree $tips2): self
    {
        $this->tips2 = $tips2;

        return $this;
    }
}
