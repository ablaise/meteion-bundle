<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuddyRank.
 *
 * @ORM\Table(name="buddy_rank")
 * @ORM\Entity
 */
class BuddyRank
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="buddy_rank_pk_seq", allocationSize=1, initialValue=1)
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
