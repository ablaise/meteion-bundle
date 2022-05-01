<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecipeLevelTable.
 *
 * @ORM\Table(name="recipe_level_table")
 * @ORM\Entity
 */
class RecipeLevelTable
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="recipe_level_table_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="class_job_level", type="integer", nullable=true)
     */
    private $classJobLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stars", type="integer", nullable=true)
     */
    private $stars;

    /**
     * @var int|null
     *
     * @ORM\Column(name="suggested_craftsmanship", type="bigint", nullable=true)
     */
    private $suggestedCraftsmanship;

    /**
     * @var int|null
     *
     * @ORM\Column(name="suggested_control", type="bigint", nullable=true)
     */
    private $suggestedControl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="difficulty", type="bigint", nullable=true)
     */
    private $difficulty;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quality", type="bigint", nullable=true)
     */
    private $quality;

    /**
     * @var int|null
     *
     * @ORM\Column(name="progress_divider", type="integer", nullable=true)
     */
    private $progressDivider;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quality_divider", type="integer", nullable=true)
     */
    private $qualityDivider;

    /**
     * @var int|null
     *
     * @ORM\Column(name="progress_modifier", type="integer", nullable=true)
     */
    private $progressModifier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quality_modifier", type="integer", nullable=true)
     */
    private $qualityModifier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="durability", type="bigint", nullable=true)
     */
    private $durability;

    /**
     * @var int|null
     *
     * @ORM\Column(name="conditions_flag", type="bigint", nullable=true)
     */
    private $conditionsFlag;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getClassJobLevel(): ?int
    {
        return $this->classJobLevel;
    }

    public function setClassJobLevel(?int $classJobLevel): self
    {
        $this->classJobLevel = $classJobLevel;

        return $this;
    }

    public function getStars(): ?int
    {
        return $this->stars;
    }

    public function setStars(?int $stars): self
    {
        $this->stars = $stars;

        return $this;
    }

    public function getSuggestedCraftsmanship(): ?string
    {
        return $this->suggestedCraftsmanship;
    }

    public function setSuggestedCraftsmanship(?string $suggestedCraftsmanship): self
    {
        $this->suggestedCraftsmanship = $suggestedCraftsmanship;

        return $this;
    }

    public function getSuggestedControl(): ?string
    {
        return $this->suggestedControl;
    }

    public function setSuggestedControl(?string $suggestedControl): self
    {
        $this->suggestedControl = $suggestedControl;

        return $this;
    }

    public function getDifficulty(): ?string
    {
        return $this->difficulty;
    }

    public function setDifficulty(?string $difficulty): self
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    public function getQuality(): ?string
    {
        return $this->quality;
    }

    public function setQuality(?string $quality): self
    {
        $this->quality = $quality;

        return $this;
    }

    public function getProgressDivider(): ?int
    {
        return $this->progressDivider;
    }

    public function setProgressDivider(?int $progressDivider): self
    {
        $this->progressDivider = $progressDivider;

        return $this;
    }

    public function getQualityDivider(): ?int
    {
        return $this->qualityDivider;
    }

    public function setQualityDivider(?int $qualityDivider): self
    {
        $this->qualityDivider = $qualityDivider;

        return $this;
    }

    public function getProgressModifier(): ?int
    {
        return $this->progressModifier;
    }

    public function setProgressModifier(?int $progressModifier): self
    {
        $this->progressModifier = $progressModifier;

        return $this;
    }

    public function getQualityModifier(): ?int
    {
        return $this->qualityModifier;
    }

    public function setQualityModifier(?int $qualityModifier): self
    {
        $this->qualityModifier = $qualityModifier;

        return $this;
    }

    public function getDurability(): ?string
    {
        return $this->durability;
    }

    public function setDurability(?string $durability): self
    {
        $this->durability = $durability;

        return $this;
    }

    public function getConditionsFlag(): ?string
    {
        return $this->conditionsFlag;
    }

    public function setConditionsFlag(?string $conditionsFlag): self
    {
        $this->conditionsFlag = $conditionsFlag;

        return $this;
    }
}
