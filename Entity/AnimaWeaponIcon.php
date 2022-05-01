<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnimaWeaponIcon.
 *
 * @ORM\Table(name="anima_weapon_icon")
 * @ORM\Entity
 */
class AnimaWeaponIcon
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="anima_weapon_icon_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hyperconductive", type="integer", nullable=true)
     */
    private $hyperconductive;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reborn", type="integer", nullable=true)
     */
    private $reborn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sharpened", type="integer", nullable=true)
     */
    private $sharpened;

    /**
     * @var int|null
     *
     * @ORM\Column(name="zodiac", type="integer", nullable=true)
     */
    private $zodiac;

    /**
     * @var int|null
     *
     * @ORM\Column(name="zodiac_lux", type="integer", nullable=true)
     */
    private $zodiacLux;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getHyperconductive(): ?int
    {
        return $this->hyperconductive;
    }

    public function setHyperconductive(?int $hyperconductive): self
    {
        $this->hyperconductive = $hyperconductive;

        return $this;
    }

    public function getReborn(): ?int
    {
        return $this->reborn;
    }

    public function setReborn(?int $reborn): self
    {
        $this->reborn = $reborn;

        return $this;
    }

    public function getSharpened(): ?int
    {
        return $this->sharpened;
    }

    public function setSharpened(?int $sharpened): self
    {
        $this->sharpened = $sharpened;

        return $this;
    }

    public function getZodiac(): ?int
    {
        return $this->zodiac;
    }

    public function setZodiac(?int $zodiac): self
    {
        $this->zodiac = $zodiac;

        return $this;
    }

    public function getZodiacLux(): ?int
    {
        return $this->zodiacLux;
    }

    public function setZodiacLux(?int $zodiacLux): self
    {
        $this->zodiacLux = $zodiacLux;

        return $this;
    }
}
