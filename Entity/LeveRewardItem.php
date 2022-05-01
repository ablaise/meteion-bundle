<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LeveRewardItem.
 *
 * @ORM\Table(name="leve_reward_item", indexes={@ORM\Index(name="idx_3972bed84f5dc3ab", columns={"leve_reward_item_group_6"}), @ORM\Index(name="idx_3972bed8483007b2", columns={"leve_reward_item_group_2"}), @ORM\Index(name="idx_3972bed8d1395608", columns={"leve_reward_item_group_1"}), @ORM\Index(name="idx_3972bed8d6549211", columns={"leve_reward_item_group_5"}), @ORM\Index(name="idx_3972bed8385af33d", columns={"leve_reward_item_group_7"}), @ORM\Index(name="idx_3972bed8a63e669e", columns={"leve_reward_item_group_0"}), @ORM\Index(name="idx_3972bed8a153a287", columns={"leve_reward_item_group_4"}), @ORM\Index(name="idx_3972bed83f373724", columns={"leve_reward_item_group_3"})})
 * @ORM\Entity
 */
class LeveRewardItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="leve_reward_item_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="probability___0", type="integer", nullable=true)
     */
    private $probability0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="probability___1", type="integer", nullable=true)
     */
    private $probability1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="probability___2", type="integer", nullable=true)
     */
    private $probability2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="probability___3", type="integer", nullable=true)
     */
    private $probability3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="probability___4", type="integer", nullable=true)
     */
    private $probability4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="probability___5", type="integer", nullable=true)
     */
    private $probability5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="probability___6", type="integer", nullable=true)
     */
    private $probability6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="probability___7", type="integer", nullable=true)
     */
    private $probability7;

    /**
     * @var LeveRewardItemGroup
     *
     * @ORM\ManyToOne(targetEntity="LeveRewardItemGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leve_reward_item_group_7", referencedColumnName="pk")
     * })
     */
    private $leveRewardItemGroup7;

    /**
     * @var LeveRewardItemGroup
     *
     * @ORM\ManyToOne(targetEntity="LeveRewardItemGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leve_reward_item_group_6", referencedColumnName="pk")
     * })
     */
    private $leveRewardItemGroup6;

    /**
     * @var LeveRewardItemGroup
     *
     * @ORM\ManyToOne(targetEntity="LeveRewardItemGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leve_reward_item_group_5", referencedColumnName="pk")
     * })
     */
    private $leveRewardItemGroup5;

    /**
     * @var LeveRewardItemGroup
     *
     * @ORM\ManyToOne(targetEntity="LeveRewardItemGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leve_reward_item_group_4", referencedColumnName="pk")
     * })
     */
    private $leveRewardItemGroup4;

    /**
     * @var LeveRewardItemGroup
     *
     * @ORM\ManyToOne(targetEntity="LeveRewardItemGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leve_reward_item_group_3", referencedColumnName="pk")
     * })
     */
    private $leveRewardItemGroup3;

    /**
     * @var LeveRewardItemGroup
     *
     * @ORM\ManyToOne(targetEntity="LeveRewardItemGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leve_reward_item_group_2", referencedColumnName="pk")
     * })
     */
    private $leveRewardItemGroup2;

    /**
     * @var LeveRewardItemGroup
     *
     * @ORM\ManyToOne(targetEntity="LeveRewardItemGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leve_reward_item_group_1", referencedColumnName="pk")
     * })
     */
    private $leveRewardItemGroup1;

    /**
     * @var LeveRewardItemGroup
     *
     * @ORM\ManyToOne(targetEntity="LeveRewardItemGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leve_reward_item_group_0", referencedColumnName="pk")
     * })
     */
    private $leveRewardItemGroup0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getProbability0(): ?int
    {
        return $this->probability0;
    }

    public function setProbability0(?int $probability0): self
    {
        $this->probability0 = $probability0;

        return $this;
    }

    public function getProbability1(): ?int
    {
        return $this->probability1;
    }

    public function setProbability1(?int $probability1): self
    {
        $this->probability1 = $probability1;

        return $this;
    }

    public function getProbability2(): ?int
    {
        return $this->probability2;
    }

    public function setProbability2(?int $probability2): self
    {
        $this->probability2 = $probability2;

        return $this;
    }

    public function getProbability3(): ?int
    {
        return $this->probability3;
    }

    public function setProbability3(?int $probability3): self
    {
        $this->probability3 = $probability3;

        return $this;
    }

    public function getProbability4(): ?int
    {
        return $this->probability4;
    }

    public function setProbability4(?int $probability4): self
    {
        $this->probability4 = $probability4;

        return $this;
    }

    public function getProbability5(): ?int
    {
        return $this->probability5;
    }

    public function setProbability5(?int $probability5): self
    {
        $this->probability5 = $probability5;

        return $this;
    }

    public function getProbability6(): ?int
    {
        return $this->probability6;
    }

    public function setProbability6(?int $probability6): self
    {
        $this->probability6 = $probability6;

        return $this;
    }

    public function getProbability7(): ?int
    {
        return $this->probability7;
    }

    public function setProbability7(?int $probability7): self
    {
        $this->probability7 = $probability7;

        return $this;
    }

    public function getLeveRewardItemGroup7(): ?LeveRewardItemGroup
    {
        return $this->leveRewardItemGroup7;
    }

    public function setLeveRewardItemGroup7(?LeveRewardItemGroup $leveRewardItemGroup7): self
    {
        $this->leveRewardItemGroup7 = $leveRewardItemGroup7;

        return $this;
    }

    public function getLeveRewardItemGroup6(): ?LeveRewardItemGroup
    {
        return $this->leveRewardItemGroup6;
    }

    public function setLeveRewardItemGroup6(?LeveRewardItemGroup $leveRewardItemGroup6): self
    {
        $this->leveRewardItemGroup6 = $leveRewardItemGroup6;

        return $this;
    }

    public function getLeveRewardItemGroup5(): ?LeveRewardItemGroup
    {
        return $this->leveRewardItemGroup5;
    }

    public function setLeveRewardItemGroup5(?LeveRewardItemGroup $leveRewardItemGroup5): self
    {
        $this->leveRewardItemGroup5 = $leveRewardItemGroup5;

        return $this;
    }

    public function getLeveRewardItemGroup4(): ?LeveRewardItemGroup
    {
        return $this->leveRewardItemGroup4;
    }

    public function setLeveRewardItemGroup4(?LeveRewardItemGroup $leveRewardItemGroup4): self
    {
        $this->leveRewardItemGroup4 = $leveRewardItemGroup4;

        return $this;
    }

    public function getLeveRewardItemGroup3(): ?LeveRewardItemGroup
    {
        return $this->leveRewardItemGroup3;
    }

    public function setLeveRewardItemGroup3(?LeveRewardItemGroup $leveRewardItemGroup3): self
    {
        $this->leveRewardItemGroup3 = $leveRewardItemGroup3;

        return $this;
    }

    public function getLeveRewardItemGroup2(): ?LeveRewardItemGroup
    {
        return $this->leveRewardItemGroup2;
    }

    public function setLeveRewardItemGroup2(?LeveRewardItemGroup $leveRewardItemGroup2): self
    {
        $this->leveRewardItemGroup2 = $leveRewardItemGroup2;

        return $this;
    }

    public function getLeveRewardItemGroup1(): ?LeveRewardItemGroup
    {
        return $this->leveRewardItemGroup1;
    }

    public function setLeveRewardItemGroup1(?LeveRewardItemGroup $leveRewardItemGroup1): self
    {
        $this->leveRewardItemGroup1 = $leveRewardItemGroup1;

        return $this;
    }

    public function getLeveRewardItemGroup0(): ?LeveRewardItemGroup
    {
        return $this->leveRewardItemGroup0;
    }

    public function setLeveRewardItemGroup0(?LeveRewardItemGroup $leveRewardItemGroup0): self
    {
        $this->leveRewardItemGroup0 = $leveRewardItemGroup0;

        return $this;
    }
}
