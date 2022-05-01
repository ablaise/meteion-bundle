<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EurekaSphereElementAdjust.
 *
 * @ORM\Table(name="eureka_sphere_element_adjust")
 * @ORM\Entity
 */
class EurekaSphereElementAdjust
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="eureka_sphere_element_adjust_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="power_modifier", type="bigint", nullable=true)
     */
    private $powerModifier;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPowerModifier(): ?string
    {
        return $this->powerModifier;
    }

    public function setPowerModifier(?string $powerModifier): self
    {
        $this->powerModifier = $powerModifier;

        return $this;
    }
}
