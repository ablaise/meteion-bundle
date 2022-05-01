<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AchievementHideCondition.
 *
 * @ORM\Table(name="achievement_hide_condition")
 * @ORM\Entity
 */
class AchievementHideCondition
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="achievement_hide_condition_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hide_achievement", type="boolean", nullable=true)
     */
    private $hideAchievement;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hide_name", type="boolean", nullable=true)
     */
    private $hideName;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hide_conditions", type="boolean", nullable=true)
     */
    private $hideConditions;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getHideAchievement(): ?bool
    {
        return $this->hideAchievement;
    }

    public function setHideAchievement(?bool $hideAchievement): self
    {
        $this->hideAchievement = $hideAchievement;

        return $this;
    }

    public function getHideName(): ?bool
    {
        return $this->hideName;
    }

    public function setHideName(?bool $hideName): self
    {
        $this->hideName = $hideName;

        return $this;
    }

    public function getHideConditions(): ?bool
    {
        return $this->hideConditions;
    }

    public function setHideConditions(?bool $hideConditions): self
    {
        $this->hideConditions = $hideConditions;

        return $this;
    }
}
