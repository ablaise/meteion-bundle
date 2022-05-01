<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HousingPreset.
 *
 * @ORM\Table(name="housing_preset", indexes={@ORM\Index(name="idx_b7e82544b02ffccb", columns={"other_floor_lighting"}), @ORM\Index(name="idx_b7e825448cfce05", columns={"other_floor_flooring"}), @ORM\Index(name="idx_b7e82544dd35947a", columns={"mansion_lighting"}), @ORM\Index(name="idx_b7e825447cdc25ae", columns={"exterior_door"}), @ORM\Index(name="idx_b7e8254484dc9c5a", columns={"other_floor_wall"}), @ORM\Index(name="idx_b7e8254494960eea", columns={"place_name"}), @ORM\Index(name="idx_b7e82544bc4885c6", columns={"exterior_window"}), @ORM\Index(name="idx_b7e82544a3c3d9b7", columns={"interior_flooring"}), @ORM\Index(name="idx_b7e825441b23eb79", columns={"interior_lighting"}), @ORM\Index(name="idx_b7e8254474cd2a85", columns={"basement_wall"}), @ORM\Index(name="idx_b7e825441374f990", columns={"exterior_roof"}), @ORM\Index(name="idx_b7e82544e5cc9e75", columns={"exterior_wall"}), @ORM\Index(name="idx_b7e825449c536f92", columns={"interior_wall"}), @ORM\Index(name="idx_b7e82544594f3464", columns={"basement_flooring"}), @ORM\Index(name="idx_b7e82544e1af06aa", columns={"basement_lighting"})})
 * @ORM\Entity
 */
class HousingPreset
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="housing_preset_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="singular", type="string", length=255, nullable=true)
     */
    private $singular;

    /**
     * @var int|null
     *
     * @ORM\Column(name="adjective", type="integer", nullable=true)
     */
    private $adjective;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plural", type="string", length=255, nullable=true)
     */
    private $plural;

    /**
     * @var int|null
     *
     * @ORM\Column(name="possessive_pronoun", type="integer", nullable=true)
     */
    private $possessivePronoun;

    /**
     * @var int|null
     *
     * @ORM\Column(name="starts_with_vowel", type="integer", nullable=true)
     */
    private $startsWithVowel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="integer", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pronoun", type="integer", nullable=true)
     */
    private $pronoun;

    /**
     * @var int|null
     *
     * @ORM\Column(name="article", type="integer", nullable=true)
     */
    private $article;

    /**
     * @var int|null
     *
     * @ORM\Column(name="housing_size", type="integer", nullable=true)
     */
    private $housingSize;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mansion_lighting", referencedColumnName="pk")
     * })
     */
    private $mansionLighting;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="basement_lighting", referencedColumnName="pk")
     * })
     */
    private $basementLighting;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="basement_flooring", referencedColumnName="pk")
     * })
     */
    private $basementFlooring;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="basement_wall", referencedColumnName="pk")
     * })
     */
    private $basementWall;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="other_floor_lighting", referencedColumnName="pk")
     * })
     */
    private $otherFloorLighting;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="other_floor_flooring", referencedColumnName="pk")
     * })
     */
    private $otherFloorFlooring;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="other_floor_wall", referencedColumnName="pk")
     * })
     */
    private $otherFloorWall;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="interior_lighting", referencedColumnName="pk")
     * })
     */
    private $interiorLighting;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="interior_flooring", referencedColumnName="pk")
     * })
     */
    private $interiorFlooring;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="interior_wall", referencedColumnName="pk")
     * })
     */
    private $interiorWall;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exterior_door", referencedColumnName="pk")
     * })
     */
    private $exteriorDoor;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exterior_window", referencedColumnName="pk")
     * })
     */
    private $exteriorWindow;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exterior_wall", referencedColumnName="pk")
     * })
     */
    private $exteriorWall;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exterior_roof", referencedColumnName="pk")
     * })
     */
    private $exteriorRoof;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name", referencedColumnName="pk")
     * })
     */
    private $placeName;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getSingular(): ?string
    {
        return $this->singular;
    }

    public function setSingular(?string $singular): self
    {
        $this->singular = $singular;

        return $this;
    }

    public function getAdjective(): ?int
    {
        return $this->adjective;
    }

    public function setAdjective(?int $adjective): self
    {
        $this->adjective = $adjective;

        return $this;
    }

    public function getPlural(): ?string
    {
        return $this->plural;
    }

    public function setPlural(?string $plural): self
    {
        $this->plural = $plural;

        return $this;
    }

    public function getPossessivePronoun(): ?int
    {
        return $this->possessivePronoun;
    }

    public function setPossessivePronoun(?int $possessivePronoun): self
    {
        $this->possessivePronoun = $possessivePronoun;

        return $this;
    }

    public function getStartsWithVowel(): ?int
    {
        return $this->startsWithVowel;
    }

    public function setStartsWithVowel(?int $startsWithVowel): self
    {
        $this->startsWithVowel = $startsWithVowel;

        return $this;
    }

    public function getColumn6(): ?int
    {
        return $this->column6;
    }

    public function setColumn6(?int $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getPronoun(): ?int
    {
        return $this->pronoun;
    }

    public function setPronoun(?int $pronoun): self
    {
        $this->pronoun = $pronoun;

        return $this;
    }

    public function getArticle(): ?int
    {
        return $this->article;
    }

    public function setArticle(?int $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getHousingSize(): ?int
    {
        return $this->housingSize;
    }

    public function setHousingSize(?int $housingSize): self
    {
        $this->housingSize = $housingSize;

        return $this;
    }

    public function getMansionLighting(): ?Item
    {
        return $this->mansionLighting;
    }

    public function setMansionLighting(?Item $mansionLighting): self
    {
        $this->mansionLighting = $mansionLighting;

        return $this;
    }

    public function getBasementLighting(): ?Item
    {
        return $this->basementLighting;
    }

    public function setBasementLighting(?Item $basementLighting): self
    {
        $this->basementLighting = $basementLighting;

        return $this;
    }

    public function getBasementFlooring(): ?Item
    {
        return $this->basementFlooring;
    }

    public function setBasementFlooring(?Item $basementFlooring): self
    {
        $this->basementFlooring = $basementFlooring;

        return $this;
    }

    public function getBasementWall(): ?Item
    {
        return $this->basementWall;
    }

    public function setBasementWall(?Item $basementWall): self
    {
        $this->basementWall = $basementWall;

        return $this;
    }

    public function getOtherFloorLighting(): ?Item
    {
        return $this->otherFloorLighting;
    }

    public function setOtherFloorLighting(?Item $otherFloorLighting): self
    {
        $this->otherFloorLighting = $otherFloorLighting;

        return $this;
    }

    public function getOtherFloorFlooring(): ?Item
    {
        return $this->otherFloorFlooring;
    }

    public function setOtherFloorFlooring(?Item $otherFloorFlooring): self
    {
        $this->otherFloorFlooring = $otherFloorFlooring;

        return $this;
    }

    public function getOtherFloorWall(): ?Item
    {
        return $this->otherFloorWall;
    }

    public function setOtherFloorWall(?Item $otherFloorWall): self
    {
        $this->otherFloorWall = $otherFloorWall;

        return $this;
    }

    public function getInteriorLighting(): ?Item
    {
        return $this->interiorLighting;
    }

    public function setInteriorLighting(?Item $interiorLighting): self
    {
        $this->interiorLighting = $interiorLighting;

        return $this;
    }

    public function getInteriorFlooring(): ?Item
    {
        return $this->interiorFlooring;
    }

    public function setInteriorFlooring(?Item $interiorFlooring): self
    {
        $this->interiorFlooring = $interiorFlooring;

        return $this;
    }

    public function getInteriorWall(): ?Item
    {
        return $this->interiorWall;
    }

    public function setInteriorWall(?Item $interiorWall): self
    {
        $this->interiorWall = $interiorWall;

        return $this;
    }

    public function getExteriorDoor(): ?Item
    {
        return $this->exteriorDoor;
    }

    public function setExteriorDoor(?Item $exteriorDoor): self
    {
        $this->exteriorDoor = $exteriorDoor;

        return $this;
    }

    public function getExteriorWindow(): ?Item
    {
        return $this->exteriorWindow;
    }

    public function setExteriorWindow(?Item $exteriorWindow): self
    {
        $this->exteriorWindow = $exteriorWindow;

        return $this;
    }

    public function getExteriorWall(): ?Item
    {
        return $this->exteriorWall;
    }

    public function setExteriorWall(?Item $exteriorWall): self
    {
        $this->exteriorWall = $exteriorWall;

        return $this;
    }

    public function getExteriorRoof(): ?Item
    {
        return $this->exteriorRoof;
    }

    public function setExteriorRoof(?Item $exteriorRoof): self
    {
        $this->exteriorRoof = $exteriorRoof;

        return $this;
    }

    public function getPlaceName(): ?PlaceName
    {
        return $this->placeName;
    }

    public function setPlaceName(?PlaceName $placeName): self
    {
        $this->placeName = $placeName;

        return $this;
    }
}
