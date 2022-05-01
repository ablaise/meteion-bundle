<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcArmyEquipPreset.
 *
 * @ORM\Table(name="gc_army_equip_preset", indexes={@ORM\Index(name="idx_98c56848a7f3f69c", columns={"head"}), @ORM\Index(name="idx_98c56848c7d170ed", columns={"main_hand"}), @ORM\Index(name="idx_98c56848fd18438a", columns={"legs"}), @ORM\Index(name="idx_98c568483ef754cf", columns={"feet"}), @ORM\Index(name="idx_98c56848e6473d6f", columns={"off_hand"}), @ORM\Index(name="idx_98c56848dba80bb2", columns={"body"}), @ORM\Index(name="idx_98c568481a4e48de", columns={"gloves"})})
 * @ORM\Entity
 */
class GcArmyEquipPreset
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gc_army_equip_preset_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="feet", referencedColumnName="pk")
     * })
     */
    private $feet;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="legs", referencedColumnName="pk")
     * })
     */
    private $legs;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gloves", referencedColumnName="pk")
     * })
     */
    private $gloves;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="body", referencedColumnName="pk")
     * })
     */
    private $body;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="head", referencedColumnName="pk")
     * })
     */
    private $head;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="off_hand", referencedColumnName="pk")
     * })
     */
    private $offHand;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="main_hand", referencedColumnName="pk")
     * })
     */
    private $mainHand;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getFeet(): ?Item
    {
        return $this->feet;
    }

    public function setFeet(?Item $feet): self
    {
        $this->feet = $feet;

        return $this;
    }

    public function getLegs(): ?Item
    {
        return $this->legs;
    }

    public function setLegs(?Item $legs): self
    {
        $this->legs = $legs;

        return $this;
    }

    public function getGloves(): ?Item
    {
        return $this->gloves;
    }

    public function setGloves(?Item $gloves): self
    {
        $this->gloves = $gloves;

        return $this;
    }

    public function getBody(): ?Item
    {
        return $this->body;
    }

    public function setBody(?Item $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getHead(): ?Item
    {
        return $this->head;
    }

    public function setHead(?Item $head): self
    {
        $this->head = $head;

        return $this;
    }

    public function getOffHand(): ?Item
    {
        return $this->offHand;
    }

    public function setOffHand(?Item $offHand): self
    {
        $this->offHand = $offHand;

        return $this;
    }

    public function getMainHand(): ?Item
    {
        return $this->mainHand;
    }

    public function setMainHand(?Item $mainHand): self
    {
        $this->mainHand = $mainHand;

        return $this;
    }
}
