<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcArmyCaptureTactics.
 *
 * @ORM\Table(name="gc_army_capture_tactics", indexes={@ORM\Index(name="idx_83cf18619fccc8e4", columns={"tactic"}), @ORM\Index(name="idx_83cf18615e237e06", columns={"name"})})
 * @ORM\Entity
 */
class GcArmyCaptureTactics
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gc_army_capture_tactics_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hp", type="integer", nullable=true)
     */
    private $hp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="damage_dealt", type="integer", nullable=true)
     */
    private $damageDealt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="damage_received", type="integer", nullable=true)
     */
    private $damageReceived;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var Addon
     *
     * @ORM\ManyToOne(targetEntity="Addon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tactic", referencedColumnName="pk")
     * })
     */
    private $tactic;

    /**
     * @var Status
     *
     * @ORM\ManyToOne(targetEntity="Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="name", referencedColumnName="pk")
     * })
     */
    private $name;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getHp(): ?int
    {
        return $this->hp;
    }

    public function setHp(?int $hp): self
    {
        $this->hp = $hp;

        return $this;
    }

    public function getDamageDealt(): ?int
    {
        return $this->damageDealt;
    }

    public function setDamageDealt(?int $damageDealt): self
    {
        $this->damageDealt = $damageDealt;

        return $this;
    }

    public function getDamageReceived(): ?int
    {
        return $this->damageReceived;
    }

    public function setDamageReceived(?int $damageReceived): self
    {
        $this->damageReceived = $damageReceived;

        return $this;
    }

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getTactic(): ?Addon
    {
        return $this->tactic;
    }

    public function setTactic(?Addon $tactic): self
    {
        $this->tactic = $tactic;

        return $this;
    }

    public function getName(): ?Status
    {
        return $this->name;
    }

    public function setName(?Status $name): self
    {
        $this->name = $name;

        return $this;
    }
}
