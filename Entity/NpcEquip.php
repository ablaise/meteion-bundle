<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NpcEquip.
 *
 * @ORM\Table(name="npc_equip", indexes={@ORM\Index(name="idx_ad2f07ff5f133287", columns={"dye_left_ring"}), @ORM\Index(name="idx_ad2f07ffccae5efb", columns={"dye_off_hand"}), @ORM\Index(name="idx_ad2f07ff3099ced3", columns={"dye_main_hand"}), @ORM\Index(name="idx_ad2f07ff7655beb5", columns={"dye_legs"}), @ORM\Index(name="idx_ad2f07ff50e5f68d", columns={"dye_body"}), @ORM\Index(name="idx_ad2f07ffb5baa9f0", columns={"dye_feet"}), @ORM\Index(name="idx_ad2f07ffab5c2b6c", columns={"dye_neck"}), @ORM\Index(name="idx_ad2f07ff2cbe0ba3", columns={"dye_head"}), @ORM\Index(name="idx_ad2f07ffd0c35338", columns={"dye_hands"}), @ORM\Index(name="idx_ad2f07ffc67fc9be", columns={"dye_right_ring"}), @ORM\Index(name="idx_ad2f07ff2de3f251", columns={"dye_wrists"}), @ORM\Index(name="idx_ad2f07ff3be1bff7", columns={"dye_ears"})})
 * @ORM\Entity
 */
class NpcEquip
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="npc_equip_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_main_hand", type="string", length=255, nullable=true)
     */
    private $modelMainHand;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_off_hand", type="string", length=255, nullable=true)
     */
    private $modelOffHand;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_head", type="bigint", nullable=true)
     */
    private $modelHead;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visor", type="boolean", nullable=true)
     */
    private $visor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_body", type="bigint", nullable=true)
     */
    private $modelBody;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_hands", type="bigint", nullable=true)
     */
    private $modelHands;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_legs", type="bigint", nullable=true)
     */
    private $modelLegs;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_feet", type="bigint", nullable=true)
     */
    private $modelFeet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_ears", type="bigint", nullable=true)
     */
    private $modelEars;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_neck", type="bigint", nullable=true)
     */
    private $modelNeck;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_wrists", type="bigint", nullable=true)
     */
    private $modelWrists;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_left_ring", type="bigint", nullable=true)
     */
    private $modelLeftRing;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_right_ring", type="bigint", nullable=true)
     */
    private $modelRightRing;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_right_ring", referencedColumnName="pk")
     * })
     */
    private $dyeRightRing;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_left_ring", referencedColumnName="pk")
     * })
     */
    private $dyeLeftRing;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_wrists", referencedColumnName="pk")
     * })
     */
    private $dyeWrists;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_neck", referencedColumnName="pk")
     * })
     */
    private $dyeNeck;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_ears", referencedColumnName="pk")
     * })
     */
    private $dyeEars;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_feet", referencedColumnName="pk")
     * })
     */
    private $dyeFeet;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_legs", referencedColumnName="pk")
     * })
     */
    private $dyeLegs;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_hands", referencedColumnName="pk")
     * })
     */
    private $dyeHands;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_body", referencedColumnName="pk")
     * })
     */
    private $dyeBody;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_head", referencedColumnName="pk")
     * })
     */
    private $dyeHead;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_off_hand", referencedColumnName="pk")
     * })
     */
    private $dyeOffHand;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_main_hand", referencedColumnName="pk")
     * })
     */
    private $dyeMainHand;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getModelMainHand(): ?string
    {
        return $this->modelMainHand;
    }

    public function setModelMainHand(?string $modelMainHand): self
    {
        $this->modelMainHand = $modelMainHand;

        return $this;
    }

    public function getModelOffHand(): ?string
    {
        return $this->modelOffHand;
    }

    public function setModelOffHand(?string $modelOffHand): self
    {
        $this->modelOffHand = $modelOffHand;

        return $this;
    }

    public function getModelHead(): ?string
    {
        return $this->modelHead;
    }

    public function setModelHead(?string $modelHead): self
    {
        $this->modelHead = $modelHead;

        return $this;
    }

    public function getVisor(): ?bool
    {
        return $this->visor;
    }

    public function setVisor(?bool $visor): self
    {
        $this->visor = $visor;

        return $this;
    }

    public function getModelBody(): ?string
    {
        return $this->modelBody;
    }

    public function setModelBody(?string $modelBody): self
    {
        $this->modelBody = $modelBody;

        return $this;
    }

    public function getModelHands(): ?string
    {
        return $this->modelHands;
    }

    public function setModelHands(?string $modelHands): self
    {
        $this->modelHands = $modelHands;

        return $this;
    }

    public function getModelLegs(): ?string
    {
        return $this->modelLegs;
    }

    public function setModelLegs(?string $modelLegs): self
    {
        $this->modelLegs = $modelLegs;

        return $this;
    }

    public function getModelFeet(): ?string
    {
        return $this->modelFeet;
    }

    public function setModelFeet(?string $modelFeet): self
    {
        $this->modelFeet = $modelFeet;

        return $this;
    }

    public function getModelEars(): ?string
    {
        return $this->modelEars;
    }

    public function setModelEars(?string $modelEars): self
    {
        $this->modelEars = $modelEars;

        return $this;
    }

    public function getModelNeck(): ?string
    {
        return $this->modelNeck;
    }

    public function setModelNeck(?string $modelNeck): self
    {
        $this->modelNeck = $modelNeck;

        return $this;
    }

    public function getModelWrists(): ?string
    {
        return $this->modelWrists;
    }

    public function setModelWrists(?string $modelWrists): self
    {
        $this->modelWrists = $modelWrists;

        return $this;
    }

    public function getModelLeftRing(): ?string
    {
        return $this->modelLeftRing;
    }

    public function setModelLeftRing(?string $modelLeftRing): self
    {
        $this->modelLeftRing = $modelLeftRing;

        return $this;
    }

    public function getModelRightRing(): ?string
    {
        return $this->modelRightRing;
    }

    public function setModelRightRing(?string $modelRightRing): self
    {
        $this->modelRightRing = $modelRightRing;

        return $this;
    }

    public function getDyeRightRing(): ?Stain
    {
        return $this->dyeRightRing;
    }

    public function setDyeRightRing(?Stain $dyeRightRing): self
    {
        $this->dyeRightRing = $dyeRightRing;

        return $this;
    }

    public function getDyeLeftRing(): ?Stain
    {
        return $this->dyeLeftRing;
    }

    public function setDyeLeftRing(?Stain $dyeLeftRing): self
    {
        $this->dyeLeftRing = $dyeLeftRing;

        return $this;
    }

    public function getDyeWrists(): ?Stain
    {
        return $this->dyeWrists;
    }

    public function setDyeWrists(?Stain $dyeWrists): self
    {
        $this->dyeWrists = $dyeWrists;

        return $this;
    }

    public function getDyeNeck(): ?Stain
    {
        return $this->dyeNeck;
    }

    public function setDyeNeck(?Stain $dyeNeck): self
    {
        $this->dyeNeck = $dyeNeck;

        return $this;
    }

    public function getDyeEars(): ?Stain
    {
        return $this->dyeEars;
    }

    public function setDyeEars(?Stain $dyeEars): self
    {
        $this->dyeEars = $dyeEars;

        return $this;
    }

    public function getDyeFeet(): ?Stain
    {
        return $this->dyeFeet;
    }

    public function setDyeFeet(?Stain $dyeFeet): self
    {
        $this->dyeFeet = $dyeFeet;

        return $this;
    }

    public function getDyeLegs(): ?Stain
    {
        return $this->dyeLegs;
    }

    public function setDyeLegs(?Stain $dyeLegs): self
    {
        $this->dyeLegs = $dyeLegs;

        return $this;
    }

    public function getDyeHands(): ?Stain
    {
        return $this->dyeHands;
    }

    public function setDyeHands(?Stain $dyeHands): self
    {
        $this->dyeHands = $dyeHands;

        return $this;
    }

    public function getDyeBody(): ?Stain
    {
        return $this->dyeBody;
    }

    public function setDyeBody(?Stain $dyeBody): self
    {
        $this->dyeBody = $dyeBody;

        return $this;
    }

    public function getDyeHead(): ?Stain
    {
        return $this->dyeHead;
    }

    public function setDyeHead(?Stain $dyeHead): self
    {
        $this->dyeHead = $dyeHead;

        return $this;
    }

    public function getDyeOffHand(): ?Stain
    {
        return $this->dyeOffHand;
    }

    public function setDyeOffHand(?Stain $dyeOffHand): self
    {
        $this->dyeOffHand = $dyeOffHand;

        return $this;
    }

    public function getDyeMainHand(): ?Stain
    {
        return $this->dyeMainHand;
    }

    public function setDyeMainHand(?Stain $dyeMainHand): self
    {
        $this->dyeMainHand = $dyeMainHand;

        return $this;
    }
}
