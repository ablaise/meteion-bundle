<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DynamicEventType.
 *
 * @ORM\Table(name="dynamic_event_type")
 * @ORM\Entity
 */
class DynamicEventType
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dynamic_event_type_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_objective_0", type="integer", nullable=true)
     */
    private $iconObjective0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_objective_1", type="integer", nullable=true)
     */
    private $iconObjective1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="bigint", nullable=true)
     */
    private $column3;

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

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getIconObjective0(): ?int
    {
        return $this->iconObjective0;
    }

    public function setIconObjective0(?int $iconObjective0): self
    {
        $this->iconObjective0 = $iconObjective0;

        return $this;
    }

    public function getIconObjective1(): ?int
    {
        return $this->iconObjective1;
    }

    public function setIconObjective1(?int $iconObjective1): self
    {
        $this->iconObjective1 = $iconObjective1;

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
}
