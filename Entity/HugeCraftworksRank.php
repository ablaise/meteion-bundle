<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HugeCraftworksRank.
 *
 * @ORM\Table(name="huge_craftworks_rank")
 * @ORM\Entity
 */
class HugeCraftworksRank
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="huge_craftworks_rank_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="crafter_level", type="integer", nullable=true)
     */
    private $crafterLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_reward_per_item", type="bigint", nullable=true)
     */
    private $expRewardPerItem;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getCrafterLevel(): ?int
    {
        return $this->crafterLevel;
    }

    public function setCrafterLevel(?int $crafterLevel): self
    {
        $this->crafterLevel = $crafterLevel;

        return $this;
    }

    public function getExpRewardPerItem(): ?string
    {
        return $this->expRewardPerItem;
    }

    public function setExpRewardPerItem(?string $expRewardPerItem): self
    {
        $this->expRewardPerItem = $expRewardPerItem;

        return $this;
    }

    public function getColumn3(): ?int
    {
        return $this->column3;
    }

    public function setColumn3(?int $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }
}
