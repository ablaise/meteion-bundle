<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TerritoryTypeTransient.
 *
 * @ORM\Table(name="territory_type_transient")
 * @ORM\Entity
 */
class TerritoryTypeTransient
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="territory_type_transient_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="offset_z", type="integer", nullable=true)
     */
    private $offsetZ;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getOffsetZ(): ?int
    {
        return $this->offsetZ;
    }

    public function setOffsetZ(?int $offsetZ): self
    {
        $this->offsetZ = $offsetZ;

        return $this;
    }
}
