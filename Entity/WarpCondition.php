<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WarpCondition.
 *
 * @ORM\Table(name="warp_condition", indexes={@ORM\Index(name="idx_a8ef6f29ca4a3dbe", columns={"required_quest_4"}), @ORM\Index(name="idx_a8ef6f292329988b", columns={"required_quest_2"}), @ORM\Index(name="idx_a8ef6f2971976234", columns={"drequired_quest_3"}), @ORM\Index(name="idx_a8ef6f29ba20c931", columns={"required_quest_1"})})
 * @ORM\Entity
 */
class WarpCondition
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="warp_condition_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gil", type="bigint", nullable=true)
     */
    private $gil;

    /**
     * @var int|null
     *
     * @ORM\Column(name="complete_param", type="integer", nullable=true)
     */
    private $completeParam;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_reward", type="bigint", nullable=true)
     */
    private $questReward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="class_level", type="bigint", nullable=true)
     */
    private $classLevel;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_quest_4", referencedColumnName="pk")
     * })
     */
    private $requiredQuest4;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="drequired_quest_3", referencedColumnName="pk")
     * })
     */
    private $drequiredQuest3;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_quest_2", referencedColumnName="pk")
     * })
     */
    private $requiredQuest2;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_quest_1", referencedColumnName="pk")
     * })
     */
    private $requiredQuest1;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getGil(): ?string
    {
        return $this->gil;
    }

    public function setGil(?string $gil): self
    {
        $this->gil = $gil;

        return $this;
    }

    public function getCompleteParam(): ?int
    {
        return $this->completeParam;
    }

    public function setCompleteParam(?int $completeParam): self
    {
        $this->completeParam = $completeParam;

        return $this;
    }

    public function getQuestReward(): ?string
    {
        return $this->questReward;
    }

    public function setQuestReward(?string $questReward): self
    {
        $this->questReward = $questReward;

        return $this;
    }

    public function getClassLevel(): ?string
    {
        return $this->classLevel;
    }

    public function setClassLevel(?string $classLevel): self
    {
        $this->classLevel = $classLevel;

        return $this;
    }

    public function getRequiredQuest4(): ?Quest
    {
        return $this->requiredQuest4;
    }

    public function setRequiredQuest4(?Quest $requiredQuest4): self
    {
        $this->requiredQuest4 = $requiredQuest4;

        return $this;
    }

    public function getDrequiredQuest3(): ?Quest
    {
        return $this->drequiredQuest3;
    }

    public function setDrequiredQuest3(?Quest $drequiredQuest3): self
    {
        $this->drequiredQuest3 = $drequiredQuest3;

        return $this;
    }

    public function getRequiredQuest2(): ?Quest
    {
        return $this->requiredQuest2;
    }

    public function setRequiredQuest2(?Quest $requiredQuest2): self
    {
        $this->requiredQuest2 = $requiredQuest2;

        return $this;
    }

    public function getRequiredQuest1(): ?Quest
    {
        return $this->requiredQuest1;
    }

    public function setRequiredQuest1(?Quest $requiredQuest1): self
    {
        $this->requiredQuest1 = $requiredQuest1;

        return $this;
    }
}
