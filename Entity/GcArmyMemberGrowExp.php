<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcArmyMemberGrowExp.
 *
 * @ORM\Table(name="gc_army_member_grow_exp")
 * @ORM\Entity
 */
class GcArmyMemberGrowExp
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gc_army_member_grow_exp_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="bigint", nullable=true)
     */
    private $column1;

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
}
