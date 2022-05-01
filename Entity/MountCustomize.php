<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MountCustomize.
 *
 * @ORM\Table(name="mount_customize")
 * @ORM\Entity
 */
class MountCustomize
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mount_customize_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_1", type="boolean", nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hyur_midlander_male_scale", type="bigint", nullable=true)
     */
    private $hyurMidlanderMaleScale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hyur_midlander_female_scale", type="bigint", nullable=true)
     */
    private $hyurMidlanderFemaleScale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hyur_highlander_male_scale", type="bigint", nullable=true)
     */
    private $hyurHighlanderMaleScale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hyur_highlander_female_scale", type="bigint", nullable=true)
     */
    private $hyurHighlanderFemaleScale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="elezen_male_scale", type="bigint", nullable=true)
     */
    private $elezenMaleScale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="elezen_female_scale", type="bigint", nullable=true)
     */
    private $elezenFemaleScale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lala_male_scale", type="bigint", nullable=true)
     */
    private $lalaMaleScale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lala_female_scale", type="bigint", nullable=true)
     */
    private $lalaFemaleScale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="miqo_male_scale", type="bigint", nullable=true)
     */
    private $miqoMaleScale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="miqo_female_scale", type="bigint", nullable=true)
     */
    private $miqoFemaleScale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="roe_male_scale", type="bigint", nullable=true)
     */
    private $roeMaleScale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="roe_female_scale", type="bigint", nullable=true)
     */
    private $roeFemaleScale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="au_ra_male_scale", type="bigint", nullable=true)
     */
    private $auRaMaleScale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="au_ra_female_scale", type="bigint", nullable=true)
     */
    private $auRaFemaleScale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hrothgar_male_scale", type="bigint", nullable=true)
     */
    private $hrothgarMaleScale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="viera_male_scale", type="bigint", nullable=true)
     */
    private $vieraMaleScale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="viera_female_scale", type="bigint", nullable=true)
     */
    private $vieraFemaleScale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hyur_midlander_male_camera_height", type="bigint", nullable=true)
     */
    private $hyurMidlanderMaleCameraHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hyur_midlander_female_camera_height", type="integer", nullable=true)
     */
    private $hyurMidlanderFemaleCameraHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hyur_highlander_male_camera_height", type="integer", nullable=true)
     */
    private $hyurHighlanderMaleCameraHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hyur_highlander_female_camera_height", type="integer", nullable=true)
     */
    private $hyurHighlanderFemaleCameraHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="elezen_male_camera_height", type="integer", nullable=true)
     */
    private $elezenMaleCameraHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="elezen_female_camera_height", type="integer", nullable=true)
     */
    private $elezenFemaleCameraHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lala_male_camera_height", type="integer", nullable=true)
     */
    private $lalaMaleCameraHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lala_female_camera_height", type="integer", nullable=true)
     */
    private $lalaFemaleCameraHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="miqo_male_camera_height", type="integer", nullable=true)
     */
    private $miqoMaleCameraHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="miqo_female_camera_height", type="integer", nullable=true)
     */
    private $miqoFemaleCameraHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="roe_male_camera_height", type="integer", nullable=true)
     */
    private $roeMaleCameraHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="roe_female_camera_height", type="integer", nullable=true)
     */
    private $roeFemaleCameraHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="au_ra_male_camera_height", type="integer", nullable=true)
     */
    private $auRaMaleCameraHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="au_ra_female_camera_height", type="integer", nullable=true)
     */
    private $auRaFemaleCameraHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hrothgar_male_camera_height", type="integer", nullable=true)
     */
    private $hrothgarMaleCameraHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="viera_male_camera_height", type="integer", nullable=true)
     */
    private $vieraMaleCameraHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="viera_female_camera_height", type="integer", nullable=true)
     */
    private $vieraFemaleCameraHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_36", type="integer", nullable=true)
     */
    private $column36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_37", type="integer", nullable=true)
     */
    private $column37;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?bool
    {
        return $this->column1;
    }

    public function setColumn1(?bool $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getHyurMidlanderMaleScale(): ?string
    {
        return $this->hyurMidlanderMaleScale;
    }

    public function setHyurMidlanderMaleScale(?string $hyurMidlanderMaleScale): self
    {
        $this->hyurMidlanderMaleScale = $hyurMidlanderMaleScale;

        return $this;
    }

    public function getHyurMidlanderFemaleScale(): ?string
    {
        return $this->hyurMidlanderFemaleScale;
    }

    public function setHyurMidlanderFemaleScale(?string $hyurMidlanderFemaleScale): self
    {
        $this->hyurMidlanderFemaleScale = $hyurMidlanderFemaleScale;

        return $this;
    }

    public function getHyurHighlanderMaleScale(): ?string
    {
        return $this->hyurHighlanderMaleScale;
    }

    public function setHyurHighlanderMaleScale(?string $hyurHighlanderMaleScale): self
    {
        $this->hyurHighlanderMaleScale = $hyurHighlanderMaleScale;

        return $this;
    }

    public function getHyurHighlanderFemaleScale(): ?string
    {
        return $this->hyurHighlanderFemaleScale;
    }

    public function setHyurHighlanderFemaleScale(?string $hyurHighlanderFemaleScale): self
    {
        $this->hyurHighlanderFemaleScale = $hyurHighlanderFemaleScale;

        return $this;
    }

    public function getElezenMaleScale(): ?string
    {
        return $this->elezenMaleScale;
    }

    public function setElezenMaleScale(?string $elezenMaleScale): self
    {
        $this->elezenMaleScale = $elezenMaleScale;

        return $this;
    }

    public function getElezenFemaleScale(): ?string
    {
        return $this->elezenFemaleScale;
    }

    public function setElezenFemaleScale(?string $elezenFemaleScale): self
    {
        $this->elezenFemaleScale = $elezenFemaleScale;

        return $this;
    }

    public function getLalaMaleScale(): ?string
    {
        return $this->lalaMaleScale;
    }

    public function setLalaMaleScale(?string $lalaMaleScale): self
    {
        $this->lalaMaleScale = $lalaMaleScale;

        return $this;
    }

    public function getLalaFemaleScale(): ?string
    {
        return $this->lalaFemaleScale;
    }

    public function setLalaFemaleScale(?string $lalaFemaleScale): self
    {
        $this->lalaFemaleScale = $lalaFemaleScale;

        return $this;
    }

    public function getMiqoMaleScale(): ?string
    {
        return $this->miqoMaleScale;
    }

    public function setMiqoMaleScale(?string $miqoMaleScale): self
    {
        $this->miqoMaleScale = $miqoMaleScale;

        return $this;
    }

    public function getMiqoFemaleScale(): ?string
    {
        return $this->miqoFemaleScale;
    }

    public function setMiqoFemaleScale(?string $miqoFemaleScale): self
    {
        $this->miqoFemaleScale = $miqoFemaleScale;

        return $this;
    }

    public function getRoeMaleScale(): ?string
    {
        return $this->roeMaleScale;
    }

    public function setRoeMaleScale(?string $roeMaleScale): self
    {
        $this->roeMaleScale = $roeMaleScale;

        return $this;
    }

    public function getRoeFemaleScale(): ?string
    {
        return $this->roeFemaleScale;
    }

    public function setRoeFemaleScale(?string $roeFemaleScale): self
    {
        $this->roeFemaleScale = $roeFemaleScale;

        return $this;
    }

    public function getAuRaMaleScale(): ?string
    {
        return $this->auRaMaleScale;
    }

    public function setAuRaMaleScale(?string $auRaMaleScale): self
    {
        $this->auRaMaleScale = $auRaMaleScale;

        return $this;
    }

    public function getAuRaFemaleScale(): ?string
    {
        return $this->auRaFemaleScale;
    }

    public function setAuRaFemaleScale(?string $auRaFemaleScale): self
    {
        $this->auRaFemaleScale = $auRaFemaleScale;

        return $this;
    }

    public function getHrothgarMaleScale(): ?string
    {
        return $this->hrothgarMaleScale;
    }

    public function setHrothgarMaleScale(?string $hrothgarMaleScale): self
    {
        $this->hrothgarMaleScale = $hrothgarMaleScale;

        return $this;
    }

    public function getVieraMaleScale(): ?string
    {
        return $this->vieraMaleScale;
    }

    public function setVieraMaleScale(?string $vieraMaleScale): self
    {
        $this->vieraMaleScale = $vieraMaleScale;

        return $this;
    }

    public function getVieraFemaleScale(): ?string
    {
        return $this->vieraFemaleScale;
    }

    public function setVieraFemaleScale(?string $vieraFemaleScale): self
    {
        $this->vieraFemaleScale = $vieraFemaleScale;

        return $this;
    }

    public function getHyurMidlanderMaleCameraHeight(): ?string
    {
        return $this->hyurMidlanderMaleCameraHeight;
    }

    public function setHyurMidlanderMaleCameraHeight(?string $hyurMidlanderMaleCameraHeight): self
    {
        $this->hyurMidlanderMaleCameraHeight = $hyurMidlanderMaleCameraHeight;

        return $this;
    }

    public function getHyurMidlanderFemaleCameraHeight(): ?int
    {
        return $this->hyurMidlanderFemaleCameraHeight;
    }

    public function setHyurMidlanderFemaleCameraHeight(?int $hyurMidlanderFemaleCameraHeight): self
    {
        $this->hyurMidlanderFemaleCameraHeight = $hyurMidlanderFemaleCameraHeight;

        return $this;
    }

    public function getHyurHighlanderMaleCameraHeight(): ?int
    {
        return $this->hyurHighlanderMaleCameraHeight;
    }

    public function setHyurHighlanderMaleCameraHeight(?int $hyurHighlanderMaleCameraHeight): self
    {
        $this->hyurHighlanderMaleCameraHeight = $hyurHighlanderMaleCameraHeight;

        return $this;
    }

    public function getHyurHighlanderFemaleCameraHeight(): ?int
    {
        return $this->hyurHighlanderFemaleCameraHeight;
    }

    public function setHyurHighlanderFemaleCameraHeight(?int $hyurHighlanderFemaleCameraHeight): self
    {
        $this->hyurHighlanderFemaleCameraHeight = $hyurHighlanderFemaleCameraHeight;

        return $this;
    }

    public function getElezenMaleCameraHeight(): ?int
    {
        return $this->elezenMaleCameraHeight;
    }

    public function setElezenMaleCameraHeight(?int $elezenMaleCameraHeight): self
    {
        $this->elezenMaleCameraHeight = $elezenMaleCameraHeight;

        return $this;
    }

    public function getElezenFemaleCameraHeight(): ?int
    {
        return $this->elezenFemaleCameraHeight;
    }

    public function setElezenFemaleCameraHeight(?int $elezenFemaleCameraHeight): self
    {
        $this->elezenFemaleCameraHeight = $elezenFemaleCameraHeight;

        return $this;
    }

    public function getLalaMaleCameraHeight(): ?int
    {
        return $this->lalaMaleCameraHeight;
    }

    public function setLalaMaleCameraHeight(?int $lalaMaleCameraHeight): self
    {
        $this->lalaMaleCameraHeight = $lalaMaleCameraHeight;

        return $this;
    }

    public function getLalaFemaleCameraHeight(): ?int
    {
        return $this->lalaFemaleCameraHeight;
    }

    public function setLalaFemaleCameraHeight(?int $lalaFemaleCameraHeight): self
    {
        $this->lalaFemaleCameraHeight = $lalaFemaleCameraHeight;

        return $this;
    }

    public function getMiqoMaleCameraHeight(): ?int
    {
        return $this->miqoMaleCameraHeight;
    }

    public function setMiqoMaleCameraHeight(?int $miqoMaleCameraHeight): self
    {
        $this->miqoMaleCameraHeight = $miqoMaleCameraHeight;

        return $this;
    }

    public function getMiqoFemaleCameraHeight(): ?int
    {
        return $this->miqoFemaleCameraHeight;
    }

    public function setMiqoFemaleCameraHeight(?int $miqoFemaleCameraHeight): self
    {
        $this->miqoFemaleCameraHeight = $miqoFemaleCameraHeight;

        return $this;
    }

    public function getRoeMaleCameraHeight(): ?int
    {
        return $this->roeMaleCameraHeight;
    }

    public function setRoeMaleCameraHeight(?int $roeMaleCameraHeight): self
    {
        $this->roeMaleCameraHeight = $roeMaleCameraHeight;

        return $this;
    }

    public function getRoeFemaleCameraHeight(): ?int
    {
        return $this->roeFemaleCameraHeight;
    }

    public function setRoeFemaleCameraHeight(?int $roeFemaleCameraHeight): self
    {
        $this->roeFemaleCameraHeight = $roeFemaleCameraHeight;

        return $this;
    }

    public function getAuRaMaleCameraHeight(): ?int
    {
        return $this->auRaMaleCameraHeight;
    }

    public function setAuRaMaleCameraHeight(?int $auRaMaleCameraHeight): self
    {
        $this->auRaMaleCameraHeight = $auRaMaleCameraHeight;

        return $this;
    }

    public function getAuRaFemaleCameraHeight(): ?int
    {
        return $this->auRaFemaleCameraHeight;
    }

    public function setAuRaFemaleCameraHeight(?int $auRaFemaleCameraHeight): self
    {
        $this->auRaFemaleCameraHeight = $auRaFemaleCameraHeight;

        return $this;
    }

    public function getHrothgarMaleCameraHeight(): ?int
    {
        return $this->hrothgarMaleCameraHeight;
    }

    public function setHrothgarMaleCameraHeight(?int $hrothgarMaleCameraHeight): self
    {
        $this->hrothgarMaleCameraHeight = $hrothgarMaleCameraHeight;

        return $this;
    }

    public function getVieraMaleCameraHeight(): ?int
    {
        return $this->vieraMaleCameraHeight;
    }

    public function setVieraMaleCameraHeight(?int $vieraMaleCameraHeight): self
    {
        $this->vieraMaleCameraHeight = $vieraMaleCameraHeight;

        return $this;
    }

    public function getVieraFemaleCameraHeight(): ?int
    {
        return $this->vieraFemaleCameraHeight;
    }

    public function setVieraFemaleCameraHeight(?int $vieraFemaleCameraHeight): self
    {
        $this->vieraFemaleCameraHeight = $vieraFemaleCameraHeight;

        return $this;
    }

    public function getColumn36(): ?int
    {
        return $this->column36;
    }

    public function setColumn36(?int $column36): self
    {
        $this->column36 = $column36;

        return $this;
    }

    public function getColumn37(): ?int
    {
        return $this->column37;
    }

    public function setColumn37(?int $column37): self
    {
        $this->column37 = $column37;

        return $this;
    }
}
