<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChocoboRaceTutorial.
 *
 * @ORM\Table(name="chocobo_race_tutorial", indexes={@ORM\Index(name="idx_3b185d86e8a5abaf", columns={"npc_yell_6"}), @ORM\Index(name="idx_3b185d8676c13e0c", columns={"npc_yell_1"}), @ORM\Index(name="idx_3b185d861c60e9a", columns={"npc_yell_0"}), @ORM\Index(name="idx_3b185d8698cf5f20", columns={"npc_yell_3"}), @ORM\Index(name="idx_3b185d869fa29b39", columns={"npc_yell_7"}), @ORM\Index(name="idx_3b185d866abca83", columns={"npc_yell_4"}), @ORM\Index(name="idx_3b185d86efc86fb6", columns={"npc_yell_2"}), @ORM\Index(name="idx_3b185d8671acfa15", columns={"npc_yell_5"})})
 * @ORM\Entity
 */
class ChocoboRaceTutorial
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="chocobo_race_tutorial_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_9", type="bigint", nullable=true)
     */
    private $column9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_10", type="bigint", nullable=true)
     */
    private $column10;

    /**
     * @var NpcYell
     *
     * @ORM\ManyToOne(targetEntity="NpcYell")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="npc_yell_7", referencedColumnName="pk")
     * })
     */
    private $npcYell7;

    /**
     * @var NpcYell
     *
     * @ORM\ManyToOne(targetEntity="NpcYell")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="npc_yell_6", referencedColumnName="pk")
     * })
     */
    private $npcYell6;

    /**
     * @var NpcYell
     *
     * @ORM\ManyToOne(targetEntity="NpcYell")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="npc_yell_5", referencedColumnName="pk")
     * })
     */
    private $npcYell5;

    /**
     * @var NpcYell
     *
     * @ORM\ManyToOne(targetEntity="NpcYell")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="npc_yell_4", referencedColumnName="pk")
     * })
     */
    private $npcYell4;

    /**
     * @var NpcYell
     *
     * @ORM\ManyToOne(targetEntity="NpcYell")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="npc_yell_3", referencedColumnName="pk")
     * })
     */
    private $npcYell3;

    /**
     * @var NpcYell
     *
     * @ORM\ManyToOne(targetEntity="NpcYell")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="npc_yell_2", referencedColumnName="pk")
     * })
     */
    private $npcYell2;

    /**
     * @var NpcYell
     *
     * @ORM\ManyToOne(targetEntity="NpcYell")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="npc_yell_1", referencedColumnName="pk")
     * })
     */
    private $npcYell1;

    /**
     * @var NpcYell
     *
     * @ORM\ManyToOne(targetEntity="NpcYell")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="npc_yell_0", referencedColumnName="pk")
     * })
     */
    private $npcYell0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn9(): ?string
    {
        return $this->column9;
    }

    public function setColumn9(?string $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getColumn10(): ?string
    {
        return $this->column10;
    }

    public function setColumn10(?string $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }

    public function getNpcYell7(): ?NpcYell
    {
        return $this->npcYell7;
    }

    public function setNpcYell7(?NpcYell $npcYell7): self
    {
        $this->npcYell7 = $npcYell7;

        return $this;
    }

    public function getNpcYell6(): ?NpcYell
    {
        return $this->npcYell6;
    }

    public function setNpcYell6(?NpcYell $npcYell6): self
    {
        $this->npcYell6 = $npcYell6;

        return $this;
    }

    public function getNpcYell5(): ?NpcYell
    {
        return $this->npcYell5;
    }

    public function setNpcYell5(?NpcYell $npcYell5): self
    {
        $this->npcYell5 = $npcYell5;

        return $this;
    }

    public function getNpcYell4(): ?NpcYell
    {
        return $this->npcYell4;
    }

    public function setNpcYell4(?NpcYell $npcYell4): self
    {
        $this->npcYell4 = $npcYell4;

        return $this;
    }

    public function getNpcYell3(): ?NpcYell
    {
        return $this->npcYell3;
    }

    public function setNpcYell3(?NpcYell $npcYell3): self
    {
        $this->npcYell3 = $npcYell3;

        return $this;
    }

    public function getNpcYell2(): ?NpcYell
    {
        return $this->npcYell2;
    }

    public function setNpcYell2(?NpcYell $npcYell2): self
    {
        $this->npcYell2 = $npcYell2;

        return $this;
    }

    public function getNpcYell1(): ?NpcYell
    {
        return $this->npcYell1;
    }

    public function setNpcYell1(?NpcYell $npcYell1): self
    {
        $this->npcYell1 = $npcYell1;

        return $this;
    }

    public function getNpcYell0(): ?NpcYell
    {
        return $this->npcYell0;
    }

    public function setNpcYell0(?NpcYell $npcYell0): self
    {
        $this->npcYell0 = $npcYell0;

        return $this;
    }
}
