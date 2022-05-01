<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aetheryte.
 *
 * @ORM\Table(name="aetheryte", indexes={@ORM\Index(name="idx_74d5bc4947105707", columns={"level_2"}), @ORM\Index(name="idx_74d5bc499544e3a0", columns={"required_quest"}), @ORM\Index(name="idx_74d5bc49be0df058", columns={"aethernet_name"}), @ORM\Index(name="idx_74d5bc4993adaabb", columns={"map"}), @ORM\Index(name="idx_74d5bc49a91e362b", columns={"level_0"}), @ORM\Index(name="idx_74d5bc49de1906bd", columns={"level_1"}), @ORM\Index(name="idx_74d5bc4930176791", columns={"level_3"}), @ORM\Index(name="idx_74d5bc49e9743966", columns={"territory"}), @ORM\Index(name="idx_74d5bc4994960eea", columns={"place_name"})})
 * @ORM\Entity
 */
class Aetheryte
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aetheryte_pk_seq", allocationSize=1, initialValue=1)
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
     * @var bool|null
     *
     * @ORM\Column(name="is_aetheryte", type="boolean", nullable=true)
     */
    private $isAetheryte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_17", type="string", length=255, nullable=true)
     */
    private $column17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="aethernet_group", type="integer", nullable=true)
     */
    private $aethernetGroup;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="invisible", type="boolean", nullable=true)
     */
    private $invisible;

    /**
     * @var int|null
     *
     * @ORM\Column(name="aetherstream_x", type="integer", nullable=true)
     */
    private $aetherstreamX;

    /**
     * @var int|null
     *
     * @ORM\Column(name="aetherstream_y", type="integer", nullable=true)
     */
    private $aetherstreamY;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_24", type="integer", nullable=true)
     */
    private $column24;

    /**
     * @var Map
     *
     * @ORM\ManyToOne(targetEntity="Map")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="map", referencedColumnName="pk")
     * })
     */
    private $map;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_quest", referencedColumnName="pk")
     * })
     */
    private $requiredQuest;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_3", referencedColumnName="pk")
     * })
     */
    private $level3;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_2", referencedColumnName="pk")
     * })
     */
    private $level2;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_1", referencedColumnName="pk")
     * })
     */
    private $level1;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_0", referencedColumnName="pk")
     * })
     */
    private $level0;

    /**
     * @var TerritoryType
     *
     * @ORM\ManyToOne(targetEntity="TerritoryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="territory", referencedColumnName="pk")
     * })
     */
    private $territory;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aethernet_name", referencedColumnName="pk")
     * })
     */
    private $aethernetName;

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

    public function getIsAetheryte(): ?bool
    {
        return $this->isAetheryte;
    }

    public function setIsAetheryte(?bool $isAetheryte): self
    {
        $this->isAetheryte = $isAetheryte;

        return $this;
    }

    public function getColumn17(): ?string
    {
        return $this->column17;
    }

    public function setColumn17(?string $column17): self
    {
        $this->column17 = $column17;

        return $this;
    }

    public function getAethernetGroup(): ?int
    {
        return $this->aethernetGroup;
    }

    public function setAethernetGroup(?int $aethernetGroup): self
    {
        $this->aethernetGroup = $aethernetGroup;

        return $this;
    }

    public function getInvisible(): ?bool
    {
        return $this->invisible;
    }

    public function setInvisible(?bool $invisible): self
    {
        $this->invisible = $invisible;

        return $this;
    }

    public function getAetherstreamX(): ?int
    {
        return $this->aetherstreamX;
    }

    public function setAetherstreamX(?int $aetherstreamX): self
    {
        $this->aetherstreamX = $aetherstreamX;

        return $this;
    }

    public function getAetherstreamY(): ?int
    {
        return $this->aetherstreamY;
    }

    public function setAetherstreamY(?int $aetherstreamY): self
    {
        $this->aetherstreamY = $aetherstreamY;

        return $this;
    }

    public function getColumn24(): ?int
    {
        return $this->column24;
    }

    public function setColumn24(?int $column24): self
    {
        $this->column24 = $column24;

        return $this;
    }

    public function getMap(): ?Map
    {
        return $this->map;
    }

    public function setMap(?Map $map): self
    {
        $this->map = $map;

        return $this;
    }

    public function getRequiredQuest(): ?Quest
    {
        return $this->requiredQuest;
    }

    public function setRequiredQuest(?Quest $requiredQuest): self
    {
        $this->requiredQuest = $requiredQuest;

        return $this;
    }

    public function getLevel3(): ?Level
    {
        return $this->level3;
    }

    public function setLevel3(?Level $level3): self
    {
        $this->level3 = $level3;

        return $this;
    }

    public function getLevel2(): ?Level
    {
        return $this->level2;
    }

    public function setLevel2(?Level $level2): self
    {
        $this->level2 = $level2;

        return $this;
    }

    public function getLevel1(): ?Level
    {
        return $this->level1;
    }

    public function setLevel1(?Level $level1): self
    {
        $this->level1 = $level1;

        return $this;
    }

    public function getLevel0(): ?Level
    {
        return $this->level0;
    }

    public function setLevel0(?Level $level0): self
    {
        $this->level0 = $level0;

        return $this;
    }

    public function getTerritory(): ?TerritoryType
    {
        return $this->territory;
    }

    public function setTerritory(?TerritoryType $territory): self
    {
        $this->territory = $territory;

        return $this;
    }

    public function getAethernetName(): ?PlaceName
    {
        return $this->aethernetName;
    }

    public function setAethernetName(?PlaceName $aethernetName): self
    {
        $this->aethernetName = $aethernetName;

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
