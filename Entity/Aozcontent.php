<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aozcontent.
 *
 * @ORM\Table(name="aozcontent", indexes={@ORM\Index(name="idx_4c2bc2c0e2c9a2", columns={"content_entry"})})
 * @ORM\Entity
 */
class Aozcontent
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aozcontent_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="standard_finish_time", type="bigint", nullable=true)
     */
    private $standardFinishTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ideal_finish_time", type="bigint", nullable=true)
     */
    private $idealFinishTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="act1fight_type", type="integer", nullable=true)
     */
    private $act1fightType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="act1", type="integer", nullable=true)
     */
    private $act1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="arena_type_1", type="integer", nullable=true)
     */
    private $arenaType1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="act2fight_type", type="integer", nullable=true)
     */
    private $act2fightType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="act2", type="integer", nullable=true)
     */
    private $act2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="arena_type_2", type="integer", nullable=true)
     */
    private $arenaType2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="act3fight_type", type="integer", nullable=true)
     */
    private $act3fightType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="act3", type="integer", nullable=true)
     */
    private $act3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="arena_type_3", type="integer", nullable=true)
     */
    private $arenaType3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gil_reward", type="bigint", nullable=true)
     */
    private $gilReward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="allied_seals_reward", type="bigint", nullable=true)
     */
    private $alliedSealsReward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tomestones_reward", type="bigint", nullable=true)
     */
    private $tomestonesReward;

    /**
     * @var ContentEntry
     *
     * @ORM\ManyToOne(targetEntity="ContentEntry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_entry", referencedColumnName="pk")
     * })
     */
    private $contentEntry;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getStandardFinishTime(): ?string
    {
        return $this->standardFinishTime;
    }

    public function setStandardFinishTime(?string $standardFinishTime): self
    {
        $this->standardFinishTime = $standardFinishTime;

        return $this;
    }

    public function getIdealFinishTime(): ?string
    {
        return $this->idealFinishTime;
    }

    public function setIdealFinishTime(?string $idealFinishTime): self
    {
        $this->idealFinishTime = $idealFinishTime;

        return $this;
    }

    public function getAct1fightType(): ?int
    {
        return $this->act1fightType;
    }

    public function setAct1fightType(?int $act1fightType): self
    {
        $this->act1fightType = $act1fightType;

        return $this;
    }

    public function getAct1(): ?int
    {
        return $this->act1;
    }

    public function setAct1(?int $act1): self
    {
        $this->act1 = $act1;

        return $this;
    }

    public function getArenaType1(): ?int
    {
        return $this->arenaType1;
    }

    public function setArenaType1(?int $arenaType1): self
    {
        $this->arenaType1 = $arenaType1;

        return $this;
    }

    public function getAct2fightType(): ?int
    {
        return $this->act2fightType;
    }

    public function setAct2fightType(?int $act2fightType): self
    {
        $this->act2fightType = $act2fightType;

        return $this;
    }

    public function getAct2(): ?int
    {
        return $this->act2;
    }

    public function setAct2(?int $act2): self
    {
        $this->act2 = $act2;

        return $this;
    }

    public function getArenaType2(): ?int
    {
        return $this->arenaType2;
    }

    public function setArenaType2(?int $arenaType2): self
    {
        $this->arenaType2 = $arenaType2;

        return $this;
    }

    public function getAct3fightType(): ?int
    {
        return $this->act3fightType;
    }

    public function setAct3fightType(?int $act3fightType): self
    {
        $this->act3fightType = $act3fightType;

        return $this;
    }

    public function getAct3(): ?int
    {
        return $this->act3;
    }

    public function setAct3(?int $act3): self
    {
        $this->act3 = $act3;

        return $this;
    }

    public function getArenaType3(): ?int
    {
        return $this->arenaType3;
    }

    public function setArenaType3(?int $arenaType3): self
    {
        $this->arenaType3 = $arenaType3;

        return $this;
    }

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(?int $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getGilReward(): ?string
    {
        return $this->gilReward;
    }

    public function setGilReward(?string $gilReward): self
    {
        $this->gilReward = $gilReward;

        return $this;
    }

    public function getAlliedSealsReward(): ?string
    {
        return $this->alliedSealsReward;
    }

    public function setAlliedSealsReward(?string $alliedSealsReward): self
    {
        $this->alliedSealsReward = $alliedSealsReward;

        return $this;
    }

    public function getTomestonesReward(): ?string
    {
        return $this->tomestonesReward;
    }

    public function setTomestonesReward(?string $tomestonesReward): self
    {
        $this->tomestonesReward = $tomestonesReward;

        return $this;
    }

    public function getContentEntry(): ?ContentEntry
    {
        return $this->contentEntry;
    }

    public function setContentEntry(?ContentEntry $contentEntry): self
    {
        $this->contentEntry = $contentEntry;

        return $this;
    }
}
