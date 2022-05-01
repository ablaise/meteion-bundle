<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParamGrow.
 *
 * @ORM\Table(name="param_grow")
 * @ORM\Entity
 */
class ParamGrow
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="param_grow_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_to_next", type="integer", nullable=true)
     */
    private $expToNext;

    /**
     * @var int|null
     *
     * @ORM\Column(name="additional_actions", type="integer", nullable=true)
     */
    private $additionalActions;

    /**
     * @var int|null
     *
     * @ORM\Column(name="apply_action", type="integer", nullable=true)
     */
    private $applyAction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="scaled_quest_xp", type="bigint", nullable=true)
     */
    private $scaledQuestXp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mp_modifier", type="integer", nullable=true)
     */
    private $mpModifier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_speed", type="integer", nullable=true)
     */
    private $baseSpeed;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_modifier", type="integer", nullable=true)
     */
    private $levelModifier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_exp_modifier", type="integer", nullable=true)
     */
    private $questExpModifier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hp_modifier", type="bigint", nullable=true)
     */
    private $hpModifier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hunting_log_exp_reward", type="integer", nullable=true)
     */
    private $huntingLogExpReward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="monster_note_seals", type="integer", nullable=true)
     */
    private $monsterNoteSeals;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_level_sync", type="bigint", nullable=true)
     */
    private $itemLevelSync;

    /**
     * @var int|null
     *
     * @ORM\Column(name="proper_dungeon", type="bigint", nullable=true)
     */
    private $properDungeon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="proper_guild_order", type="bigint", nullable=true)
     */
    private $properGuildOrder;

    /**
     * @var int|null
     *
     * @ORM\Column(name="crafting_level", type="bigint", nullable=true)
     */
    private $craftingLevel;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getExpToNext(): ?int
    {
        return $this->expToNext;
    }

    public function setExpToNext(?int $expToNext): self
    {
        $this->expToNext = $expToNext;

        return $this;
    }

    public function getAdditionalActions(): ?int
    {
        return $this->additionalActions;
    }

    public function setAdditionalActions(?int $additionalActions): self
    {
        $this->additionalActions = $additionalActions;

        return $this;
    }

    public function getApplyAction(): ?int
    {
        return $this->applyAction;
    }

    public function setApplyAction(?int $applyAction): self
    {
        $this->applyAction = $applyAction;

        return $this;
    }

    public function getScaledQuestXp(): ?string
    {
        return $this->scaledQuestXp;
    }

    public function setScaledQuestXp(?string $scaledQuestXp): self
    {
        $this->scaledQuestXp = $scaledQuestXp;

        return $this;
    }

    public function getMpModifier(): ?int
    {
        return $this->mpModifier;
    }

    public function setMpModifier(?int $mpModifier): self
    {
        $this->mpModifier = $mpModifier;

        return $this;
    }

    public function getBaseSpeed(): ?int
    {
        return $this->baseSpeed;
    }

    public function setBaseSpeed(?int $baseSpeed): self
    {
        $this->baseSpeed = $baseSpeed;

        return $this;
    }

    public function getLevelModifier(): ?int
    {
        return $this->levelModifier;
    }

    public function setLevelModifier(?int $levelModifier): self
    {
        $this->levelModifier = $levelModifier;

        return $this;
    }

    public function getQuestExpModifier(): ?int
    {
        return $this->questExpModifier;
    }

    public function setQuestExpModifier(?int $questExpModifier): self
    {
        $this->questExpModifier = $questExpModifier;

        return $this;
    }

    public function getHpModifier(): ?string
    {
        return $this->hpModifier;
    }

    public function setHpModifier(?string $hpModifier): self
    {
        $this->hpModifier = $hpModifier;

        return $this;
    }

    public function getHuntingLogExpReward(): ?int
    {
        return $this->huntingLogExpReward;
    }

    public function setHuntingLogExpReward(?int $huntingLogExpReward): self
    {
        $this->huntingLogExpReward = $huntingLogExpReward;

        return $this;
    }

    public function getMonsterNoteSeals(): ?int
    {
        return $this->monsterNoteSeals;
    }

    public function setMonsterNoteSeals(?int $monsterNoteSeals): self
    {
        $this->monsterNoteSeals = $monsterNoteSeals;

        return $this;
    }

    public function getItemLevelSync(): ?string
    {
        return $this->itemLevelSync;
    }

    public function setItemLevelSync(?string $itemLevelSync): self
    {
        $this->itemLevelSync = $itemLevelSync;

        return $this;
    }

    public function getProperDungeon(): ?string
    {
        return $this->properDungeon;
    }

    public function setProperDungeon(?string $properDungeon): self
    {
        $this->properDungeon = $properDungeon;

        return $this;
    }

    public function getProperGuildOrder(): ?string
    {
        return $this->properGuildOrder;
    }

    public function setProperGuildOrder(?string $properGuildOrder): self
    {
        $this->properGuildOrder = $properGuildOrder;

        return $this;
    }

    public function getCraftingLevel(): ?string
    {
        return $this->craftingLevel;
    }

    public function setCraftingLevel(?string $craftingLevel): self
    {
        $this->craftingLevel = $craftingLevel;

        return $this;
    }
}
