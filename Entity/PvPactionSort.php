<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PvPactionSort.
 *
 * @ORM\Table(name="pv_paction_sort")
 * @ORM\Entity
 */
class PvPactionSort
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pv_paction_sort_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="action_type", type="integer", nullable=true)
     */
    private $actionType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="action", type="integer", nullable=true)
     */
    private $action;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_3", type="boolean", nullable=true)
     */
    private $column3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_4", type="boolean", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="integer", nullable=true)
     */
    private $column5;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getActionType(): ?int
    {
        return $this->actionType;
    }

    public function setActionType(?int $actionType): self
    {
        $this->actionType = $actionType;

        return $this;
    }

    public function getAction(): ?int
    {
        return $this->action;
    }

    public function setAction(?int $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getColumn3(): ?bool
    {
        return $this->column3;
    }

    public function setColumn3(?bool $column3): self
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

    public function getColumn5(): ?int
    {
        return $this->column5;
    }

    public function setColumn5(?int $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }
}
