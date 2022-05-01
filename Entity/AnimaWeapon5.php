<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnimaWeapon5.
 *
 * @ORM\Table(name="anima_weapon5", indexes={@ORM\Index(name="idx_8531298579e799f0", columns={"parameter_2"}), @ORM\Index(name="idx_85312985e0eec84a", columns={"parameter_1"}), @ORM\Index(name="idx_853129851f1b251e", columns={"item"}), @ORM\Index(name="idx_85312985ee0a966", columns={"parameter_3"}), @ORM\Index(name="idx_8531298590843cc5", columns={"parameter_4"}), @ORM\Index(name="idx_8531298597e9f8dc", columns={"parameter_0"})})
 * @ORM\Entity
 */
class AnimaWeapon5
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="anima_weapon5_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="integer", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="secondary_stat_total", type="integer", nullable=true)
     */
    private $secondaryStatTotal;

    /**
     * @var AnimaWeapon5param
     *
     * @ORM\ManyToOne(targetEntity="AnimaWeapon5param")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parameter_4", referencedColumnName="pk")
     * })
     */
    private $parameter4;

    /**
     * @var AnimaWeapon5param
     *
     * @ORM\ManyToOne(targetEntity="AnimaWeapon5param")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parameter_3", referencedColumnName="pk")
     * })
     */
    private $parameter3;

    /**
     * @var AnimaWeapon5param
     *
     * @ORM\ManyToOne(targetEntity="AnimaWeapon5param")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parameter_2", referencedColumnName="pk")
     * })
     */
    private $parameter2;

    /**
     * @var AnimaWeapon5param
     *
     * @ORM\ManyToOne(targetEntity="AnimaWeapon5param")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parameter_1", referencedColumnName="pk")
     * })
     */
    private $parameter1;

    /**
     * @var AnimaWeapon5param
     *
     * @ORM\ManyToOne(targetEntity="AnimaWeapon5param")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parameter_0", referencedColumnName="pk")
     * })
     */
    private $parameter0;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item", referencedColumnName="pk")
     * })
     */
    private $item;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn2(): ?int
    {
        return $this->column2;
    }

    public function setColumn2(?int $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getSecondaryStatTotal(): ?int
    {
        return $this->secondaryStatTotal;
    }

    public function setSecondaryStatTotal(?int $secondaryStatTotal): self
    {
        $this->secondaryStatTotal = $secondaryStatTotal;

        return $this;
    }

    public function getParameter4(): ?AnimaWeapon5param
    {
        return $this->parameter4;
    }

    public function setParameter4(?AnimaWeapon5param $parameter4): self
    {
        $this->parameter4 = $parameter4;

        return $this;
    }

    public function getParameter3(): ?AnimaWeapon5param
    {
        return $this->parameter3;
    }

    public function setParameter3(?AnimaWeapon5param $parameter3): self
    {
        $this->parameter3 = $parameter3;

        return $this;
    }

    public function getParameter2(): ?AnimaWeapon5param
    {
        return $this->parameter2;
    }

    public function setParameter2(?AnimaWeapon5param $parameter2): self
    {
        $this->parameter2 = $parameter2;

        return $this;
    }

    public function getParameter1(): ?AnimaWeapon5param
    {
        return $this->parameter1;
    }

    public function setParameter1(?AnimaWeapon5param $parameter1): self
    {
        $this->parameter1 = $parameter1;

        return $this;
    }

    public function getParameter0(): ?AnimaWeapon5param
    {
        return $this->parameter0;
    }

    public function setParameter0(?AnimaWeapon5param $parameter0): self
    {
        $this->parameter0 = $parameter0;

        return $this;
    }

    public function getItem(): ?Item
    {
        return $this->item;
    }

    public function setItem(?Item $item): self
    {
        $this->item = $item;

        return $this;
    }
}
