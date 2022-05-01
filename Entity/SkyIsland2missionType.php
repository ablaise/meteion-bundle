<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkyIsland2missionType.
 *
 * @ORM\Table(name="sky_island2mission_type")
 * @ORM\Entity
 */
class SkyIsland2missionType
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sky_island2mission_type_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="type", type="boolean", nullable=true)
     */
    private $type;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getType(): ?bool
    {
        return $this->type;
    }

    public function setType(?bool $type): self
    {
        $this->type = $type;

        return $this;
    }
}
