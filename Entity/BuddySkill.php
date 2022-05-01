<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuddySkill.
 *
 * @ORM\Table(name="buddy_skill")
 * @ORM\Entity
 */
class BuddySkill
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="buddy_skill_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="buddy_level", type="integer", nullable=true)
     */
    private $buddyLevel;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * @var int|null
     *
     * @ORM\Column(name="defender", type="integer", nullable=true)
     */
    private $defender;

    /**
     * @var int|null
     *
     * @ORM\Column(name="attacker", type="integer", nullable=true)
     */
    private $attacker;

    /**
     * @var int|null
     *
     * @ORM\Column(name="healer", type="integer", nullable=true)
     */
    private $healer;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getBuddyLevel(): ?int
    {
        return $this->buddyLevel;
    }

    public function setBuddyLevel(?int $buddyLevel): self
    {
        $this->buddyLevel = $buddyLevel;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getDefender(): ?int
    {
        return $this->defender;
    }

    public function setDefender(?int $defender): self
    {
        $this->defender = $defender;

        return $this;
    }

    public function getAttacker(): ?int
    {
        return $this->attacker;
    }

    public function setAttacker(?int $attacker): self
    {
        $this->attacker = $attacker;

        return $this;
    }

    public function getHealer(): ?int
    {
        return $this->healer;
    }

    public function setHealer(?int $healer): self
    {
        $this->healer = $healer;

        return $this;
    }
}
