<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MonsterNote.
 *
 * @ORM\Table(name="monster_note", indexes={@ORM\Index(name="idx_ebc02f54d84de765", columns={"monster_note_target_0"}), @ORM\Index(name="idx_ebc02f544144b6df", columns={"monster_note_target_3"}), @ORM\Index(name="idx_ebc02f5436438649", columns={"monster_note_target_2"}), @ORM\Index(name="idx_ebc02f54af4ad7f3", columns={"monster_note_target_1"})})
 * @ORM\Entity
 */
class MonsterNote
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="monster_note_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_0", type="integer", nullable=true)
     */
    private $count0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_1", type="integer", nullable=true)
     */
    private $count1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_2", type="integer", nullable=true)
     */
    private $count2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_3", type="integer", nullable=true)
     */
    private $count3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward", type="bigint", nullable=true)
     */
    private $reward;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var MonsterNoteTarget
     *
     * @ORM\ManyToOne(targetEntity="MonsterNoteTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="monster_note_target_3", referencedColumnName="pk")
     * })
     */
    private $monsterNoteTarget3;

    /**
     * @var MonsterNoteTarget
     *
     * @ORM\ManyToOne(targetEntity="MonsterNoteTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="monster_note_target_2", referencedColumnName="pk")
     * })
     */
    private $monsterNoteTarget2;

    /**
     * @var MonsterNoteTarget
     *
     * @ORM\ManyToOne(targetEntity="MonsterNoteTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="monster_note_target_1", referencedColumnName="pk")
     * })
     */
    private $monsterNoteTarget1;

    /**
     * @var MonsterNoteTarget
     *
     * @ORM\ManyToOne(targetEntity="MonsterNoteTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="monster_note_target_0", referencedColumnName="pk")
     * })
     */
    private $monsterNoteTarget0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getCount0(): ?int
    {
        return $this->count0;
    }

    public function setCount0(?int $count0): self
    {
        $this->count0 = $count0;

        return $this;
    }

    public function getCount1(): ?int
    {
        return $this->count1;
    }

    public function setCount1(?int $count1): self
    {
        $this->count1 = $count1;

        return $this;
    }

    public function getCount2(): ?int
    {
        return $this->count2;
    }

    public function setCount2(?int $count2): self
    {
        $this->count2 = $count2;

        return $this;
    }

    public function getCount3(): ?int
    {
        return $this->count3;
    }

    public function setCount3(?int $count3): self
    {
        $this->count3 = $count3;

        return $this;
    }

    public function getReward(): ?string
    {
        return $this->reward;
    }

    public function setReward(?string $reward): self
    {
        $this->reward = $reward;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getMonsterNoteTarget3(): ?MonsterNoteTarget
    {
        return $this->monsterNoteTarget3;
    }

    public function setMonsterNoteTarget3(?MonsterNoteTarget $monsterNoteTarget3): self
    {
        $this->monsterNoteTarget3 = $monsterNoteTarget3;

        return $this;
    }

    public function getMonsterNoteTarget2(): ?MonsterNoteTarget
    {
        return $this->monsterNoteTarget2;
    }

    public function setMonsterNoteTarget2(?MonsterNoteTarget $monsterNoteTarget2): self
    {
        $this->monsterNoteTarget2 = $monsterNoteTarget2;

        return $this;
    }

    public function getMonsterNoteTarget1(): ?MonsterNoteTarget
    {
        return $this->monsterNoteTarget1;
    }

    public function setMonsterNoteTarget1(?MonsterNoteTarget $monsterNoteTarget1): self
    {
        $this->monsterNoteTarget1 = $monsterNoteTarget1;

        return $this;
    }

    public function getMonsterNoteTarget0(): ?MonsterNoteTarget
    {
        return $this->monsterNoteTarget0;
    }

    public function setMonsterNoteTarget0(?MonsterNoteTarget $monsterNoteTarget0): self
    {
        $this->monsterNoteTarget0 = $monsterNoteTarget0;

        return $this;
    }
}
