<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BnpcCustomize.
 *
 * @ORM\Table(name="bnpc_customize", indexes={@ORM\Index(name="idx_5c33d4172653b558", columns={"tribe"}), @ORM\Index(name="idx_5c33d417da6fbbaf", columns={"race"})})
 * @ORM\Entity
 */
class BnpcCustomize
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bnpc_customize_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gender", type="integer", nullable=true)
     */
    private $gender;

    /**
     * @var int|null
     *
     * @ORM\Column(name="body_type", type="integer", nullable=true)
     */
    private $bodyType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="height", type="integer", nullable=true)
     */
    private $height;

    /**
     * @var int|null
     *
     * @ORM\Column(name="face", type="integer", nullable=true)
     */
    private $face;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hair_style", type="integer", nullable=true)
     */
    private $hairStyle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hair_highlight", type="integer", nullable=true)
     */
    private $hairHighlight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="skin_color", type="integer", nullable=true)
     */
    private $skinColor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="eye_heterochromia", type="integer", nullable=true)
     */
    private $eyeHeterochromia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hair_color", type="integer", nullable=true)
     */
    private $hairColor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hair_highlight_color", type="integer", nullable=true)
     */
    private $hairHighlightColor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facial_feature", type="integer", nullable=true)
     */
    private $facialFeature;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facial_feature_color", type="integer", nullable=true)
     */
    private $facialFeatureColor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="eyebrows", type="integer", nullable=true)
     */
    private $eyebrows;

    /**
     * @var int|null
     *
     * @ORM\Column(name="eye_color", type="integer", nullable=true)
     */
    private $eyeColor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="eye_shape", type="integer", nullable=true)
     */
    private $eyeShape;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nose", type="integer", nullable=true)
     */
    private $nose;

    /**
     * @var int|null
     *
     * @ORM\Column(name="jaw", type="integer", nullable=true)
     */
    private $jaw;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mouth", type="integer", nullable=true)
     */
    private $mouth;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lip_color", type="integer", nullable=true)
     */
    private $lipColor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bust_or_tone1", type="integer", nullable=true)
     */
    private $bustOrTone1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="extra_feature1", type="integer", nullable=true)
     */
    private $extraFeature1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="extra_feature2or_bust", type="integer", nullable=true)
     */
    private $extraFeature2orBust;

    /**
     * @var int|null
     *
     * @ORM\Column(name="face_paint", type="integer", nullable=true)
     */
    private $facePaint;

    /**
     * @var int|null
     *
     * @ORM\Column(name="face_paint_color", type="integer", nullable=true)
     */
    private $facePaintColor;

    /**
     * @var Tribe
     *
     * @ORM\ManyToOne(targetEntity="Tribe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tribe", referencedColumnName="pk")
     * })
     */
    private $tribe;

    /**
     * @var Race
     *
     * @ORM\ManyToOne(targetEntity="Race")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="race", referencedColumnName="pk")
     * })
     */
    private $race;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getGender(): ?int
    {
        return $this->gender;
    }

    public function setGender(?int $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getBodyType(): ?int
    {
        return $this->bodyType;
    }

    public function setBodyType(?int $bodyType): self
    {
        $this->bodyType = $bodyType;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(?int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getFace(): ?int
    {
        return $this->face;
    }

    public function setFace(?int $face): self
    {
        $this->face = $face;

        return $this;
    }

    public function getHairStyle(): ?int
    {
        return $this->hairStyle;
    }

    public function setHairStyle(?int $hairStyle): self
    {
        $this->hairStyle = $hairStyle;

        return $this;
    }

    public function getHairHighlight(): ?int
    {
        return $this->hairHighlight;
    }

    public function setHairHighlight(?int $hairHighlight): self
    {
        $this->hairHighlight = $hairHighlight;

        return $this;
    }

    public function getSkinColor(): ?int
    {
        return $this->skinColor;
    }

    public function setSkinColor(?int $skinColor): self
    {
        $this->skinColor = $skinColor;

        return $this;
    }

    public function getEyeHeterochromia(): ?int
    {
        return $this->eyeHeterochromia;
    }

    public function setEyeHeterochromia(?int $eyeHeterochromia): self
    {
        $this->eyeHeterochromia = $eyeHeterochromia;

        return $this;
    }

    public function getHairColor(): ?int
    {
        return $this->hairColor;
    }

    public function setHairColor(?int $hairColor): self
    {
        $this->hairColor = $hairColor;

        return $this;
    }

    public function getHairHighlightColor(): ?int
    {
        return $this->hairHighlightColor;
    }

    public function setHairHighlightColor(?int $hairHighlightColor): self
    {
        $this->hairHighlightColor = $hairHighlightColor;

        return $this;
    }

    public function getFacialFeature(): ?int
    {
        return $this->facialFeature;
    }

    public function setFacialFeature(?int $facialFeature): self
    {
        $this->facialFeature = $facialFeature;

        return $this;
    }

    public function getFacialFeatureColor(): ?int
    {
        return $this->facialFeatureColor;
    }

    public function setFacialFeatureColor(?int $facialFeatureColor): self
    {
        $this->facialFeatureColor = $facialFeatureColor;

        return $this;
    }

    public function getEyebrows(): ?int
    {
        return $this->eyebrows;
    }

    public function setEyebrows(?int $eyebrows): self
    {
        $this->eyebrows = $eyebrows;

        return $this;
    }

    public function getEyeColor(): ?int
    {
        return $this->eyeColor;
    }

    public function setEyeColor(?int $eyeColor): self
    {
        $this->eyeColor = $eyeColor;

        return $this;
    }

    public function getEyeShape(): ?int
    {
        return $this->eyeShape;
    }

    public function setEyeShape(?int $eyeShape): self
    {
        $this->eyeShape = $eyeShape;

        return $this;
    }

    public function getNose(): ?int
    {
        return $this->nose;
    }

    public function setNose(?int $nose): self
    {
        $this->nose = $nose;

        return $this;
    }

    public function getJaw(): ?int
    {
        return $this->jaw;
    }

    public function setJaw(?int $jaw): self
    {
        $this->jaw = $jaw;

        return $this;
    }

    public function getMouth(): ?int
    {
        return $this->mouth;
    }

    public function setMouth(?int $mouth): self
    {
        $this->mouth = $mouth;

        return $this;
    }

    public function getLipColor(): ?int
    {
        return $this->lipColor;
    }

    public function setLipColor(?int $lipColor): self
    {
        $this->lipColor = $lipColor;

        return $this;
    }

    public function getBustOrTone1(): ?int
    {
        return $this->bustOrTone1;
    }

    public function setBustOrTone1(?int $bustOrTone1): self
    {
        $this->bustOrTone1 = $bustOrTone1;

        return $this;
    }

    public function getExtraFeature1(): ?int
    {
        return $this->extraFeature1;
    }

    public function setExtraFeature1(?int $extraFeature1): self
    {
        $this->extraFeature1 = $extraFeature1;

        return $this;
    }

    public function getExtraFeature2orBust(): ?int
    {
        return $this->extraFeature2orBust;
    }

    public function setExtraFeature2orBust(?int $extraFeature2orBust): self
    {
        $this->extraFeature2orBust = $extraFeature2orBust;

        return $this;
    }

    public function getFacePaint(): ?int
    {
        return $this->facePaint;
    }

    public function setFacePaint(?int $facePaint): self
    {
        $this->facePaint = $facePaint;

        return $this;
    }

    public function getFacePaintColor(): ?int
    {
        return $this->facePaintColor;
    }

    public function setFacePaintColor(?int $facePaintColor): self
    {
        $this->facePaintColor = $facePaintColor;

        return $this;
    }

    public function getTribe(): ?Tribe
    {
        return $this->tribe;
    }

    public function setTribe(?Tribe $tribe): self
    {
        $this->tribe = $tribe;

        return $this;
    }

    public function getRace(): ?Race
    {
        return $this->race;
    }

    public function setRace(?Race $race): self
    {
        $this->race = $race;

        return $this;
    }
}
