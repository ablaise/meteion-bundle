<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HwdcrafterSupplyReward.
 *
 * @ORM\Table(name="hwdcrafter_supply_reward")
 * @ORM\Entity
 */
class HwdcrafterSupplyReward
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="hwdcrafter_supply_reward_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_reward_amount", type="bigint", nullable=true)
     */
    private $scriptRewardAmount;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_reward", type="bigint", nullable=true)
     */
    private $expReward;

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

    public function getScriptRewardAmount(): ?string
    {
        return $this->scriptRewardAmount;
    }

    public function setScriptRewardAmount(?string $scriptRewardAmount): self
    {
        $this->scriptRewardAmount = $scriptRewardAmount;

        return $this;
    }

    public function getExpReward(): ?string
    {
        return $this->expReward;
    }

    public function setExpReward(?string $expReward): self
    {
        $this->expReward = $expReward;

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
