<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipSlotCategory.
 *
 * @ORM\Table(name="equip_slot_category")
 * @ORM\Entity
 */
class EquipSlotCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="equip_slot_category_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="main_hand", type="integer", nullable=true)
     */
    private $mainHand;

    /**
     * @var int|null
     *
     * @ORM\Column(name="off_hand", type="integer", nullable=true)
     */
    private $offHand;

    /**
     * @var int|null
     *
     * @ORM\Column(name="head", type="integer", nullable=true)
     */
    private $head;

    /**
     * @var int|null
     *
     * @ORM\Column(name="body", type="integer", nullable=true)
     */
    private $body;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gloves", type="integer", nullable=true)
     */
    private $gloves;

    /**
     * @var int|null
     *
     * @ORM\Column(name="waist", type="integer", nullable=true)
     */
    private $waist;

    /**
     * @var int|null
     *
     * @ORM\Column(name="legs", type="integer", nullable=true)
     */
    private $legs;

    /**
     * @var int|null
     *
     * @ORM\Column(name="feet", type="integer", nullable=true)
     */
    private $feet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ears", type="integer", nullable=true)
     */
    private $ears;

    /**
     * @var int|null
     *
     * @ORM\Column(name="neck", type="integer", nullable=true)
     */
    private $neck;

    /**
     * @var int|null
     *
     * @ORM\Column(name="wrists", type="integer", nullable=true)
     */
    private $wrists;

    /**
     * @var int|null
     *
     * @ORM\Column(name="finger_l", type="integer", nullable=true)
     */
    private $fingerL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="finger_r", type="integer", nullable=true)
     */
    private $fingerR;

    /**
     * @var int|null
     *
     * @ORM\Column(name="soul_crystal", type="integer", nullable=true)
     */
    private $soulCrystal;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getMainHand(): ?int
    {
        return $this->mainHand;
    }

    public function setMainHand(?int $mainHand): self
    {
        $this->mainHand = $mainHand;

        return $this;
    }

    public function getOffHand(): ?int
    {
        return $this->offHand;
    }

    public function setOffHand(?int $offHand): self
    {
        $this->offHand = $offHand;

        return $this;
    }

    public function getHead(): ?int
    {
        return $this->head;
    }

    public function setHead(?int $head): self
    {
        $this->head = $head;

        return $this;
    }

    public function getBody(): ?int
    {
        return $this->body;
    }

    public function setBody(?int $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getGloves(): ?int
    {
        return $this->gloves;
    }

    public function setGloves(?int $gloves): self
    {
        $this->gloves = $gloves;

        return $this;
    }

    public function getWaist(): ?int
    {
        return $this->waist;
    }

    public function setWaist(?int $waist): self
    {
        $this->waist = $waist;

        return $this;
    }

    public function getLegs(): ?int
    {
        return $this->legs;
    }

    public function setLegs(?int $legs): self
    {
        $this->legs = $legs;

        return $this;
    }

    public function getFeet(): ?int
    {
        return $this->feet;
    }

    public function setFeet(?int $feet): self
    {
        $this->feet = $feet;

        return $this;
    }

    public function getEars(): ?int
    {
        return $this->ears;
    }

    public function setEars(?int $ears): self
    {
        $this->ears = $ears;

        return $this;
    }

    public function getNeck(): ?int
    {
        return $this->neck;
    }

    public function setNeck(?int $neck): self
    {
        $this->neck = $neck;

        return $this;
    }

    public function getWrists(): ?int
    {
        return $this->wrists;
    }

    public function setWrists(?int $wrists): self
    {
        $this->wrists = $wrists;

        return $this;
    }

    public function getFingerL(): ?int
    {
        return $this->fingerL;
    }

    public function setFingerL(?int $fingerL): self
    {
        $this->fingerL = $fingerL;

        return $this;
    }

    public function getFingerR(): ?int
    {
        return $this->fingerR;
    }

    public function setFingerR(?int $fingerR): self
    {
        $this->fingerR = $fingerR;

        return $this;
    }

    public function getSoulCrystal(): ?int
    {
        return $this->soulCrystal;
    }

    public function setSoulCrystal(?int $soulCrystal): self
    {
        $this->soulCrystal = $soulCrystal;

        return $this;
    }
}
