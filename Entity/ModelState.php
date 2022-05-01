<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModelState.
 *
 * @ORM\Table(name="model_state", indexes={@ORM\Index(name="idx_9dd0f20c9f79558f", columns={"start"})})
 * @ORM\Entity
 */
class ModelState
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="model_state_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="start", referencedColumnName="pk")
     * })
     */
    private $start;

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

    public function getStart(): ?ActionTimeline
    {
        return $this->start;
    }

    public function setStart(?ActionTimeline $start): self
    {
        $this->start = $start;

        return $this;
    }
}
