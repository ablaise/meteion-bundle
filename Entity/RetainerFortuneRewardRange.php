<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RetainerFortuneRewardRange.
 *
 * @ORM\Table(name="retainer_fortune_reward_range")
 * @ORM\Entity
 */
class RetainerFortuneRewardRange
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="retainer_fortune_reward_range_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_of_level", type="bigint", nullable=true)
     */
    private $percentOfLevel;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPercentOfLevel(): ?string
    {
        return $this->percentOfLevel;
    }

    public function setPercentOfLevel(?string $percentOfLevel): self
    {
        $this->percentOfLevel = $percentOfLevel;

        return $this;
    }
}
