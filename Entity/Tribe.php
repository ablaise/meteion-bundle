<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tribe.
 *
 * @ORM\Table(name="tribe")
 * @ORM\Entity
 */
class Tribe
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tribe_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="masculine", type="string", length=255, nullable=true)
     */
    private $masculine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="feminine", type="string", length=255, nullable=true)
     */
    private $feminine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hp", type="integer", nullable=true)
     */
    private $hp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mp", type="integer", nullable=true)
     */
    private $mp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="str", type="integer", nullable=true)
     */
    private $str;

    /**
     * @var int|null
     *
     * @ORM\Column(name="vit", type="integer", nullable=true)
     */
    private $vit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dex", type="integer", nullable=true)
     */
    private $dex;

    /**
     * @var int|null
     *
     * @ORM\Column(name="int", type="integer", nullable=true)
     */
    private $int;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mnd", type="integer", nullable=true)
     */
    private $mnd;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pie", type="integer", nullable=true)
     */
    private $pie;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getMasculine(): ?string
    {
        return $this->masculine;
    }

    public function setMasculine(?string $masculine): self
    {
        $this->masculine = $masculine;

        return $this;
    }

    public function getFeminine(): ?string
    {
        return $this->feminine;
    }

    public function setFeminine(?string $feminine): self
    {
        $this->feminine = $feminine;

        return $this;
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

    public function getMp(): ?int
    {
        return $this->mp;
    }

    public function setMp(?int $mp): self
    {
        $this->mp = $mp;

        return $this;
    }

    public function getStr(): ?int
    {
        return $this->str;
    }

    public function setStr(?int $str): self
    {
        $this->str = $str;

        return $this;
    }

    public function getVit(): ?int
    {
        return $this->vit;
    }

    public function setVit(?int $vit): self
    {
        $this->vit = $vit;

        return $this;
    }

    public function getDex(): ?int
    {
        return $this->dex;
    }

    public function setDex(?int $dex): self
    {
        $this->dex = $dex;

        return $this;
    }

    public function getInt(): ?int
    {
        return $this->int;
    }

    public function setInt(?int $int): self
    {
        $this->int = $int;

        return $this;
    }

    public function getMnd(): ?int
    {
        return $this->mnd;
    }

    public function setMnd(?int $mnd): self
    {
        $this->mnd = $mnd;

        return $this;
    }

    public function getPie(): ?int
    {
        return $this->pie;
    }

    public function setPie(?int $pie): self
    {
        $this->pie = $pie;

        return $this;
    }
}
