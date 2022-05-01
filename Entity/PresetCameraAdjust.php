<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PresetCameraAdjust.
 *
 * @ORM\Table(name="preset_camera_adjust")
 * @ORM\Entity
 */
class PresetCameraAdjust
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="preset_camera_adjust_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hyur_m", type="string", length=255, nullable=true)
     */
    private $hyurM;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hyur_f", type="string", length=255, nullable=true)
     */
    private $hyurF;

    /**
     * @var string|null
     *
     * @ORM\Column(name="elezen_m", type="string", length=255, nullable=true)
     */
    private $elezenM;

    /**
     * @var string|null
     *
     * @ORM\Column(name="elezen_f", type="string", length=255, nullable=true)
     */
    private $elezenF;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lalafell_m", type="string", length=255, nullable=true)
     */
    private $lalafellM;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lalafell_f", type="string", length=255, nullable=true)
     */
    private $lalafellF;

    /**
     * @var string|null
     *
     * @ORM\Column(name="miqote_m", type="string", length=255, nullable=true)
     */
    private $miqoteM;

    /**
     * @var string|null
     *
     * @ORM\Column(name="miqote_f", type="string", length=255, nullable=true)
     */
    private $miqoteF;

    /**
     * @var string|null
     *
     * @ORM\Column(name="roe_m", type="string", length=255, nullable=true)
     */
    private $roeM;

    /**
     * @var string|null
     *
     * @ORM\Column(name="roe_f", type="string", length=255, nullable=true)
     */
    private $roeF;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hrothgar_m", type="string", length=255, nullable=true)
     */
    private $hrothgarM;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hrothgar_f", type="string", length=255, nullable=true)
     */
    private $hrothgarF;

    /**
     * @var string|null
     *
     * @ORM\Column(name="viera_m", type="string", length=255, nullable=true)
     */
    private $vieraM;

    /**
     * @var string|null
     *
     * @ORM\Column(name="viera_f", type="string", length=255, nullable=true)
     */
    private $vieraF;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_15", type="string", length=255, nullable=true)
     */
    private $column15;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getHyurM(): ?string
    {
        return $this->hyurM;
    }

    public function setHyurM(?string $hyurM): self
    {
        $this->hyurM = $hyurM;

        return $this;
    }

    public function getHyurF(): ?string
    {
        return $this->hyurF;
    }

    public function setHyurF(?string $hyurF): self
    {
        $this->hyurF = $hyurF;

        return $this;
    }

    public function getElezenM(): ?string
    {
        return $this->elezenM;
    }

    public function setElezenM(?string $elezenM): self
    {
        $this->elezenM = $elezenM;

        return $this;
    }

    public function getElezenF(): ?string
    {
        return $this->elezenF;
    }

    public function setElezenF(?string $elezenF): self
    {
        $this->elezenF = $elezenF;

        return $this;
    }

    public function getLalafellM(): ?string
    {
        return $this->lalafellM;
    }

    public function setLalafellM(?string $lalafellM): self
    {
        $this->lalafellM = $lalafellM;

        return $this;
    }

    public function getLalafellF(): ?string
    {
        return $this->lalafellF;
    }

    public function setLalafellF(?string $lalafellF): self
    {
        $this->lalafellF = $lalafellF;

        return $this;
    }

    public function getMiqoteM(): ?string
    {
        return $this->miqoteM;
    }

    public function setMiqoteM(?string $miqoteM): self
    {
        $this->miqoteM = $miqoteM;

        return $this;
    }

    public function getMiqoteF(): ?string
    {
        return $this->miqoteF;
    }

    public function setMiqoteF(?string $miqoteF): self
    {
        $this->miqoteF = $miqoteF;

        return $this;
    }

    public function getRoeM(): ?string
    {
        return $this->roeM;
    }

    public function setRoeM(?string $roeM): self
    {
        $this->roeM = $roeM;

        return $this;
    }

    public function getRoeF(): ?string
    {
        return $this->roeF;
    }

    public function setRoeF(?string $roeF): self
    {
        $this->roeF = $roeF;

        return $this;
    }

    public function getHrothgarM(): ?string
    {
        return $this->hrothgarM;
    }

    public function setHrothgarM(?string $hrothgarM): self
    {
        $this->hrothgarM = $hrothgarM;

        return $this;
    }

    public function getHrothgarF(): ?string
    {
        return $this->hrothgarF;
    }

    public function setHrothgarF(?string $hrothgarF): self
    {
        $this->hrothgarF = $hrothgarF;

        return $this;
    }

    public function getVieraM(): ?string
    {
        return $this->vieraM;
    }

    public function setVieraM(?string $vieraM): self
    {
        $this->vieraM = $vieraM;

        return $this;
    }

    public function getVieraF(): ?string
    {
        return $this->vieraF;
    }

    public function setVieraF(?string $vieraF): self
    {
        $this->vieraF = $vieraF;

        return $this;
    }

    public function getColumn15(): ?string
    {
        return $this->column15;
    }

    public function setColumn15(?string $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }
}
