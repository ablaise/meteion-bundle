<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MobHuntRewardCap.
 *
 * @ORM\Table(name="mob_hunt_reward_cap")
 * @ORM\Entity
 */
class MobHuntRewardCap
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mob_hunt_reward_cap_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_cap", type="bigint", nullable=true)
     */
    private $expCap;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getExpCap(): ?string
    {
        return $this->expCap;
    }

    public function setExpCap(?string $expCap): self
    {
        $this->expCap = $expCap;

        return $this;
    }
}
