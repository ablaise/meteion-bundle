<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Buddy.
 *
 * @ORM\Table(name="buddy", indexes={@ORM\Index(name="idx_1ea78759570657af", columns={"quest_requirement_1"}), @ORM\Index(name="idx_1ea78759ce0f0615", columns={"quest_requirement_2"})})
 * @ORM\Entity
 */
class Buddy
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="buddy_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base", type="integer", nullable=true)
     */
    private $base;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_equip", type="integer", nullable=true)
     */
    private $baseEquip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sound_effect_4", type="string", length=255, nullable=true)
     */
    private $soundEffect4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sound_effect_3", type="string", length=255, nullable=true)
     */
    private $soundEffect3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sound_effect_2", type="string", length=255, nullable=true)
     */
    private $soundEffect2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sound_effect_1", type="string", length=255, nullable=true)
     */
    private $soundEffect1;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_requirement_1", referencedColumnName="pk")
     * })
     */
    private $questRequirement1;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_requirement_2", referencedColumnName="pk")
     * })
     */
    private $questRequirement2;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getBase(): ?int
    {
        return $this->base;
    }

    public function setBase(?int $base): self
    {
        $this->base = $base;

        return $this;
    }

    public function getBaseEquip(): ?int
    {
        return $this->baseEquip;
    }

    public function setBaseEquip(?int $baseEquip): self
    {
        $this->baseEquip = $baseEquip;

        return $this;
    }

    public function getSoundEffect4(): ?string
    {
        return $this->soundEffect4;
    }

    public function setSoundEffect4(?string $soundEffect4): self
    {
        $this->soundEffect4 = $soundEffect4;

        return $this;
    }

    public function getSoundEffect3(): ?string
    {
        return $this->soundEffect3;
    }

    public function setSoundEffect3(?string $soundEffect3): self
    {
        $this->soundEffect3 = $soundEffect3;

        return $this;
    }

    public function getSoundEffect2(): ?string
    {
        return $this->soundEffect2;
    }

    public function setSoundEffect2(?string $soundEffect2): self
    {
        $this->soundEffect2 = $soundEffect2;

        return $this;
    }

    public function getSoundEffect1(): ?string
    {
        return $this->soundEffect1;
    }

    public function setSoundEffect1(?string $soundEffect1): self
    {
        $this->soundEffect1 = $soundEffect1;

        return $this;
    }

    public function getQuestRequirement1(): ?Quest
    {
        return $this->questRequirement1;
    }

    public function setQuestRequirement1(?Quest $questRequirement1): self
    {
        $this->questRequirement1 = $questRequirement1;

        return $this;
    }

    public function getQuestRequirement2(): ?Quest
    {
        return $this->questRequirement2;
    }

    public function setQuestRequirement2(?Quest $questRequirement2): self
    {
        $this->questRequirement2 = $questRequirement2;

        return $this;
    }
}
