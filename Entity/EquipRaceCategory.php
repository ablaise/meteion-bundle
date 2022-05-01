<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipRaceCategory.
 *
 * @ORM\Table(name="equip_race_category")
 * @ORM\Entity
 */
class EquipRaceCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="equip_race_category_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hyur", type="boolean", nullable=true)
     */
    private $hyur;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="elezen", type="boolean", nullable=true)
     */
    private $elezen;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="lalafell", type="boolean", nullable=true)
     */
    private $lalafell;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="miqote", type="boolean", nullable=true)
     */
    private $miqote;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="roegadyn", type="boolean", nullable=true)
     */
    private $roegadyn;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="au_ra", type="boolean", nullable=true)
     */
    private $auRa;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_7", type="boolean", nullable=true)
     */
    private $column7;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_8", type="boolean", nullable=true)
     */
    private $column8;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="male", type="boolean", nullable=true)
     */
    private $male;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="female", type="boolean", nullable=true)
     */
    private $female;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getHyur(): ?bool
    {
        return $this->hyur;
    }

    public function setHyur(?bool $hyur): self
    {
        $this->hyur = $hyur;

        return $this;
    }

    public function getElezen(): ?bool
    {
        return $this->elezen;
    }

    public function setElezen(?bool $elezen): self
    {
        $this->elezen = $elezen;

        return $this;
    }

    public function getLalafell(): ?bool
    {
        return $this->lalafell;
    }

    public function setLalafell(?bool $lalafell): self
    {
        $this->lalafell = $lalafell;

        return $this;
    }

    public function getMiqote(): ?bool
    {
        return $this->miqote;
    }

    public function setMiqote(?bool $miqote): self
    {
        $this->miqote = $miqote;

        return $this;
    }

    public function getRoegadyn(): ?bool
    {
        return $this->roegadyn;
    }

    public function setRoegadyn(?bool $roegadyn): self
    {
        $this->roegadyn = $roegadyn;

        return $this;
    }

    public function getAuRa(): ?bool
    {
        return $this->auRa;
    }

    public function setAuRa(?bool $auRa): self
    {
        $this->auRa = $auRa;

        return $this;
    }

    public function getColumn7(): ?bool
    {
        return $this->column7;
    }

    public function setColumn7(?bool $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getColumn8(): ?bool
    {
        return $this->column8;
    }

    public function setColumn8(?bool $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getMale(): ?bool
    {
        return $this->male;
    }

    public function setMale(?bool $male): self
    {
        $this->male = $male;

        return $this;
    }

    public function getFemale(): ?bool
    {
        return $this->female;
    }

    public function setFemale(?bool $female): self
    {
        $this->female = $female;

        return $this;
    }
}
