<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PresetCamera.
 *
 * @ORM\Table(name="preset_camera")
 * @ORM\Entity
 */
class PresetCamera
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="preset_camera_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="eid", type="bigint", nullable=true)
     */
    private $eid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pos_x", type="string", length=255, nullable=true)
     */
    private $posX;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pos_y", type="string", length=255, nullable=true)
     */
    private $posY;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pos_z", type="string", length=255, nullable=true)
     */
    private $posZ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="elezen", type="string", length=255, nullable=true)
     */
    private $elezen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lalafell", type="string", length=255, nullable=true)
     */
    private $lalafell;

    /**
     * @var string|null
     *
     * @ORM\Column(name="miqote", type="string", length=255, nullable=true)
     */
    private $miqote;

    /**
     * @var string|null
     *
     * @ORM\Column(name="roe", type="string", length=255, nullable=true)
     */
    private $roe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hrothgar", type="string", length=255, nullable=true)
     */
    private $hrothgar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="viera", type="string", length=255, nullable=true)
     */
    private $viera;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_11", type="string", length=255, nullable=true)
     */
    private $column11;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hyur_f", type="string", length=255, nullable=true)
     */
    private $hyurF;

    /**
     * @var string|null
     *
     * @ORM\Column(name="elezen_f", type="string", length=255, nullable=true)
     */
    private $elezenF;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lalafell_f", type="string", length=255, nullable=true)
     */
    private $lalafellF;

    /**
     * @var string|null
     *
     * @ORM\Column(name="miqote_f", type="string", length=255, nullable=true)
     */
    private $miqoteF;

    /**
     * @var string|null
     *
     * @ORM\Column(name="roe_f", type="string", length=255, nullable=true)
     */
    private $roeF;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hrothgar_f", type="string", length=255, nullable=true)
     */
    private $hrothgarF;

    /**
     * @var string|null
     *
     * @ORM\Column(name="viera_f", type="string", length=255, nullable=true)
     */
    private $vieraF;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getEid(): ?string
    {
        return $this->eid;
    }

    public function setEid(?string $eid): self
    {
        $this->eid = $eid;

        return $this;
    }

    public function getPosX(): ?string
    {
        return $this->posX;
    }

    public function setPosX(?string $posX): self
    {
        $this->posX = $posX;

        return $this;
    }

    public function getPosY(): ?string
    {
        return $this->posY;
    }

    public function setPosY(?string $posY): self
    {
        $this->posY = $posY;

        return $this;
    }

    public function getPosZ(): ?string
    {
        return $this->posZ;
    }

    public function setPosZ(?string $posZ): self
    {
        $this->posZ = $posZ;

        return $this;
    }

    public function getElezen(): ?string
    {
        return $this->elezen;
    }

    public function setElezen(?string $elezen): self
    {
        $this->elezen = $elezen;

        return $this;
    }

    public function getLalafell(): ?string
    {
        return $this->lalafell;
    }

    public function setLalafell(?string $lalafell): self
    {
        $this->lalafell = $lalafell;

        return $this;
    }

    public function getMiqote(): ?string
    {
        return $this->miqote;
    }

    public function setMiqote(?string $miqote): self
    {
        $this->miqote = $miqote;

        return $this;
    }

    public function getRoe(): ?string
    {
        return $this->roe;
    }

    public function setRoe(?string $roe): self
    {
        $this->roe = $roe;

        return $this;
    }

    public function getHrothgar(): ?string
    {
        return $this->hrothgar;
    }

    public function setHrothgar(?string $hrothgar): self
    {
        $this->hrothgar = $hrothgar;

        return $this;
    }

    public function getViera(): ?string
    {
        return $this->viera;
    }

    public function setViera(?string $viera): self
    {
        $this->viera = $viera;

        return $this;
    }

    public function getColumn11(): ?string
    {
        return $this->column11;
    }

    public function setColumn11(?string $column11): self
    {
        $this->column11 = $column11;

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

    public function getElezenF(): ?string
    {
        return $this->elezenF;
    }

    public function setElezenF(?string $elezenF): self
    {
        $this->elezenF = $elezenF;

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

    public function getMiqoteF(): ?string
    {
        return $this->miqoteF;
    }

    public function setMiqoteF(?string $miqoteF): self
    {
        $this->miqoteF = $miqoteF;

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

    public function getHrothgarF(): ?string
    {
        return $this->hrothgarF;
    }

    public function setHrothgarF(?string $hrothgarF): self
    {
        $this->hrothgarF = $hrothgarF;

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
}
