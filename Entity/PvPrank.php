<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PvPrank.
 *
 * @ORM\Table(name="pv_prank")
 * @ORM\Entity
 */
class PvPrank
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pv_prank_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_required", type="bigint", nullable=true)
     */
    private $expRequired;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getExpRequired(): ?string
    {
        return $this->expRequired;
    }

    public function setExpRequired(?string $expRequired): self
    {
        $this->expRequired = $expRequired;

        return $this;
    }
}
