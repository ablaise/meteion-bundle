<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CraftLevelDifference.
 *
 * @ORM\Table(name="craft_level_difference")
 * @ORM\Entity
 */
class CraftLevelDifference
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="craft_level_difference_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="difference", type="integer", nullable=true)
     */
    private $difference;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getDifference(): ?int
    {
        return $this->difference;
    }

    public function setDifference(?int $difference): self
    {
        $this->difference = $difference;

        return $this;
    }
}
