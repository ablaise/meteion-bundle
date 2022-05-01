<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EurekaGrowData.
 *
 * @ORM\Table(name="eureka_grow_data")
 * @ORM\Entity
 */
class EurekaGrowData
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="eureka_grow_data_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_resistance", type="bigint", nullable=true)
     */
    private $baseResistance;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getBaseResistance(): ?string
    {
        return $this->baseResistance;
    }

    public function setBaseResistance(?string $baseResistance): self
    {
        $this->baseResistance = $baseResistance;

        return $this;
    }
}
