<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatheringExp.
 *
 * @ORM\Table(name="gathering_exp")
 * @ORM\Entity
 */
class GatheringExp
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gathering_exp_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp", type="integer", nullable=true)
     */
    private $exp;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getExp(): ?int
    {
        return $this->exp;
    }

    public function setExp(?int $exp): self
    {
        $this->exp = $exp;

        return $this;
    }
}
