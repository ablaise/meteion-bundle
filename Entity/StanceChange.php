<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StanceChange.
 *
 * @ORM\Table(name="stance_change", indexes={@ORM\Index(name="idx_a89f441bfd5a0397", columns={"action_0"}), @ORM\Index(name="idx_a89f441b8a5d3301", columns={"action_1"})})
 * @ORM\Entity
 */
class StanceChange
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="stance_change_pk_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="column_4", type="bigint", nullable=true)
     */
    private $column4;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_1", referencedColumnName="pk")
     * })
     */
    private $action1;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_0", referencedColumnName="pk")
     * })
     */
    private $action0;

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

    public function getColumn4(): ?string
    {
        return $this->column4;
    }

    public function setColumn4(?string $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getAction1(): ?Action
    {
        return $this->action1;
    }

    public function setAction1(?Action $action1): self
    {
        $this->action1 = $action1;

        return $this;
    }

    public function getAction0(): ?Action
    {
        return $this->action0;
    }

    public function setAction0(?Action $action0): self
    {
        $this->action0 = $action0;

        return $this;
    }
}
