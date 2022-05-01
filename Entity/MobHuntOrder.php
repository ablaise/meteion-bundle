<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MobHuntOrder.
 *
 * @ORM\Table(name="mob_hunt_order", indexes={@ORM\Index(name="idx_87a108a3466f2ffc", columns={"target"}), @ORM\Index(name="idx_87a108a3ffa813ec", columns={"mob_hunt_reward"})})
 * @ORM\Entity
 */
class MobHuntOrder
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mob_hunt_order_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="needed_kills", type="integer", nullable=true)
     */
    private $neededKills;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rank", type="integer", nullable=true)
     */
    private $rank;

    /**
     * @var MobHuntReward
     *
     * @ORM\ManyToOne(targetEntity="MobHuntReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mob_hunt_reward", referencedColumnName="pk")
     * })
     */
    private $mobHuntReward;

    /**
     * @var MobHuntTarget
     *
     * @ORM\ManyToOne(targetEntity="MobHuntTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="target", referencedColumnName="pk")
     * })
     */
    private $target;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getNeededKills(): ?int
    {
        return $this->neededKills;
    }

    public function setNeededKills(?int $neededKills): self
    {
        $this->neededKills = $neededKills;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(?int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    public function getMobHuntReward(): ?MobHuntReward
    {
        return $this->mobHuntReward;
    }

    public function setMobHuntReward(?MobHuntReward $mobHuntReward): self
    {
        $this->mobHuntReward = $mobHuntReward;

        return $this;
    }

    public function getTarget(): ?MobHuntTarget
    {
        return $this->target;
    }

    public function setTarget(?MobHuntTarget $target): self
    {
        $this->target = $target;

        return $this;
    }
}
