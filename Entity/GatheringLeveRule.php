<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatheringLeveRule.
 *
 * @ORM\Table(name="gathering_leve_rule")
 * @ORM\Entity
 */
class GatheringLeveRule
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gathering_leve_rule_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rule", type="string", length=255, nullable=true)
     */
    private $rule;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getRule(): ?string
    {
        return $this->rule;
    }

    public function setRule(?string $rule): self
    {
        $this->rule = $rule;

        return $this;
    }
}
