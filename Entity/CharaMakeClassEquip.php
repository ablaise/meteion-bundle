<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharaMakeClassEquip.
 *
 * @ORM\Table(name="chara_make_class_equip", indexes={@ORM\Index(name="idx_7d750bc1ed4b199f", columns={"class"})})
 * @ORM\Entity
 */
class CharaMakeClassEquip
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="chara_make_class_equip_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="helmet", type="string", length=255, nullable=true)
     */
    private $helmet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="top", type="string", length=255, nullable=true)
     */
    private $top;

    /**
     * @var string|null
     *
     * @ORM\Column(name="glove", type="string", length=255, nullable=true)
     */
    private $glove;

    /**
     * @var string|null
     *
     * @ORM\Column(name="down", type="string", length=255, nullable=true)
     */
    private $down;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shoes", type="string", length=255, nullable=true)
     */
    private $shoes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="weapon", type="string", length=255, nullable=true)
     */
    private $weapon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sub_weapon", type="string", length=255, nullable=true)
     */
    private $subWeapon;

    /**
     * @var ClassJob
     *
     * @ORM\ManyToOne(targetEntity="ClassJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class", referencedColumnName="pk")
     * })
     */
    private $class;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getHelmet(): ?string
    {
        return $this->helmet;
    }

    public function setHelmet(?string $helmet): self
    {
        $this->helmet = $helmet;

        return $this;
    }

    public function getTop(): ?string
    {
        return $this->top;
    }

    public function setTop(?string $top): self
    {
        $this->top = $top;

        return $this;
    }

    public function getGlove(): ?string
    {
        return $this->glove;
    }

    public function setGlove(?string $glove): self
    {
        $this->glove = $glove;

        return $this;
    }

    public function getDown(): ?string
    {
        return $this->down;
    }

    public function setDown(?string $down): self
    {
        $this->down = $down;

        return $this;
    }

    public function getShoes(): ?string
    {
        return $this->shoes;
    }

    public function setShoes(?string $shoes): self
    {
        $this->shoes = $shoes;

        return $this;
    }

    public function getWeapon(): ?string
    {
        return $this->weapon;
    }

    public function setWeapon(?string $weapon): self
    {
        $this->weapon = $weapon;

        return $this;
    }

    public function getSubWeapon(): ?string
    {
        return $this->subWeapon;
    }

    public function setSubWeapon(?string $subWeapon): self
    {
        $this->subWeapon = $subWeapon;

        return $this;
    }

    public function getClass(): ?ClassJob
    {
        return $this->class;
    }

    public function setClass(?ClassJob $class): self
    {
        $this->class = $class;

        return $this;
    }
}
