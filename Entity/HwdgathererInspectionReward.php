<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HwdgathererInspectionReward.
 *
 * @ORM\Table(name="hwdgatherer_inspection_reward")
 * @ORM\Entity
 */
class HwdgathererInspectionReward
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="hwdgatherer_inspection_reward_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="scrips", type="bigint", nullable=true)
     */
    private $scrips;

    /**
     * @var int|null
     *
     * @ORM\Column(name="points", type="bigint", nullable=true)
     */
    private $points;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getScrips(): ?string
    {
        return $this->scrips;
    }

    public function setScrips(?string $scrips): self
    {
        $this->scrips = $scrips;

        return $this;
    }

    public function getPoints(): ?string
    {
        return $this->points;
    }

    public function setPoints(?string $points): self
    {
        $this->points = $points;

        return $this;
    }
}
