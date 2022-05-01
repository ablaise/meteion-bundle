<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AetherialWheel.
 *
 * @ORM\Table(name="aetherial_wheel", indexes={@ORM\Index(name="idx_59f94c93ea52dbd9", columns={"item_unprimed"}), @ORM\Index(name="idx_59f94c93eb7fb05b", columns={"item_primed"})})
 * @ORM\Entity
 */
class AetherialWheel
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aetherial_wheel_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="grade", type="integer", nullable=true)
     */
    private $grade;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hours_required", type="integer", nullable=true)
     */
    private $hoursRequired;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_primed", referencedColumnName="pk")
     * })
     */
    private $itemPrimed;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_unprimed", referencedColumnName="pk")
     * })
     */
    private $itemUnprimed;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getGrade(): ?int
    {
        return $this->grade;
    }

    public function setGrade(?int $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function getHoursRequired(): ?int
    {
        return $this->hoursRequired;
    }

    public function setHoursRequired(?int $hoursRequired): self
    {
        $this->hoursRequired = $hoursRequired;

        return $this;
    }

    public function getItemPrimed(): ?Item
    {
        return $this->itemPrimed;
    }

    public function setItemPrimed(?Item $itemPrimed): self
    {
        $this->itemPrimed = $itemPrimed;

        return $this;
    }

    public function getItemUnprimed(): ?Item
    {
        return $this->itemUnprimed;
    }

    public function setItemUnprimed(?Item $itemUnprimed): self
    {
        $this->itemUnprimed = $itemUnprimed;

        return $this;
    }
}
