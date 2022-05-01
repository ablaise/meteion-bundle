<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlantPotFlowerSeed.
 *
 * @ORM\Table(name="plant_pot_flower_seed")
 * @ORM\Entity
 */
class PlantPotFlowerSeed
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="plant_pot_flower_seed_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="seed_icon_0", type="integer", nullable=true)
     */
    private $seedIcon0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="seed_icon_1", type="integer", nullable=true)
     */
    private $seedIcon1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="seed_icon_2", type="integer", nullable=true)
     */
    private $seedIcon2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="seed_icon_3", type="integer", nullable=true)
     */
    private $seedIcon3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="seed_icon_4", type="integer", nullable=true)
     */
    private $seedIcon4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="seed_icon_5", type="integer", nullable=true)
     */
    private $seedIcon5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="seed_icon_6", type="integer", nullable=true)
     */
    private $seedIcon6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="seed_icon_7", type="integer", nullable=true)
     */
    private $seedIcon7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="seed_icon_8", type="integer", nullable=true)
     */
    private $seedIcon8;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getSeedIcon0(): ?int
    {
        return $this->seedIcon0;
    }

    public function setSeedIcon0(?int $seedIcon0): self
    {
        $this->seedIcon0 = $seedIcon0;

        return $this;
    }

    public function getSeedIcon1(): ?int
    {
        return $this->seedIcon1;
    }

    public function setSeedIcon1(?int $seedIcon1): self
    {
        $this->seedIcon1 = $seedIcon1;

        return $this;
    }

    public function getSeedIcon2(): ?int
    {
        return $this->seedIcon2;
    }

    public function setSeedIcon2(?int $seedIcon2): self
    {
        $this->seedIcon2 = $seedIcon2;

        return $this;
    }

    public function getSeedIcon3(): ?int
    {
        return $this->seedIcon3;
    }

    public function setSeedIcon3(?int $seedIcon3): self
    {
        $this->seedIcon3 = $seedIcon3;

        return $this;
    }

    public function getSeedIcon4(): ?int
    {
        return $this->seedIcon4;
    }

    public function setSeedIcon4(?int $seedIcon4): self
    {
        $this->seedIcon4 = $seedIcon4;

        return $this;
    }

    public function getSeedIcon5(): ?int
    {
        return $this->seedIcon5;
    }

    public function setSeedIcon5(?int $seedIcon5): self
    {
        $this->seedIcon5 = $seedIcon5;

        return $this;
    }

    public function getSeedIcon6(): ?int
    {
        return $this->seedIcon6;
    }

    public function setSeedIcon6(?int $seedIcon6): self
    {
        $this->seedIcon6 = $seedIcon6;

        return $this;
    }

    public function getSeedIcon7(): ?int
    {
        return $this->seedIcon7;
    }

    public function setSeedIcon7(?int $seedIcon7): self
    {
        $this->seedIcon7 = $seedIcon7;

        return $this;
    }

    public function getSeedIcon8(): ?int
    {
        return $this->seedIcon8;
    }

    public function setSeedIcon8(?int $seedIcon8): self
    {
        $this->seedIcon8 = $seedIcon8;

        return $this;
    }
}
