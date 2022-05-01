<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MateriaTomestoneRate.
 *
 * @ORM\Table(name="materia_tomestone_rate")
 * @ORM\Entity
 */
class MateriaTomestoneRate
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="materia_tomestone_rate_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rate", type="bigint", nullable=true)
     */
    private $rate;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getRate(): ?string
    {
        return $this->rate;
    }

    public function setRate(?string $rate): self
    {
        $this->rate = $rate;

        return $this;
    }
}
