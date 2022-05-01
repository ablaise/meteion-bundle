<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TerritoryType.
 *
 * @ORM\Table(name="territory_type", indexes={@ORM\Index(name="idx_96ee9add31492b58", columns={"ex_version"}), @ORM\Index(name="idx_96ee9add94960eea", columns={"place_name"}), @ORM\Index(name="idx_96ee9add93adaabb", columns={"map"}), @ORM\Index(name="idx_96ee9add838546cc", columns={"mount_speed"}), @ORM\Index(name="idx_96ee9add957e262a", columns={"array_event_handler"}), @ORM\Index(name="idx_96ee9add7ef2a9f", columns={"place_name_region"}), @ORM\Index(name="idx_96ee9add74d5bc49", columns={"aetheryte"}), @ORM\Index(name="idx_96ee9add93c6930d", columns={"place_name_zone"}), @ORM\Index(name="idx_96ee9add8668572b", columns={"content_finder_condition"}), @ORM\Index(name="idx_96ee9adddda85d1", columns={"loading_image"}), @ORM\Index(name="idx_96ee9addea7375c2", columns={"quest_battle"})})
 * @ORM\Entity
 */
class TerritoryType
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="territory_type_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bg", type="string", length=255, nullable=true)
     */
    private $bg;

    /**
     * @var int|null
     *
     * @ORM\Column(name="battalion_mode", type="integer", nullable=true)
     */
    private $battalionMode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exclusive_type", type="integer", nullable=true)
     */
    private $exclusiveType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="territory_intended_use", type="integer", nullable=true)
     */
    private $territoryIntendedUse;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_12", type="boolean", nullable=true)
     */
    private $column12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="weather_rate", type="integer", nullable=true)
     */
    private $weatherRate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_14", type="boolean", nullable=true)
     */
    private $column14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_15", type="integer", nullable=true)
     */
    private $column15;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="pcsearch", type="boolean", nullable=true)
     */
    private $pcsearch;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="stealth", type="boolean", nullable=true)
     */
    private $stealth;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mount", type="boolean", nullable=true)
     */
    private $mount;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_19", type="boolean", nullable=true)
     */
    private $column19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bgm", type="integer", nullable=true)
     */
    private $bgm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="place_name_region_icon", type="integer", nullable=true)
     */
    private $placeNameRegionIcon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="place_name_icon", type="integer", nullable=true)
     */
    private $placeNameIcon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fixed_time", type="integer", nullable=true)
     */
    private $fixedTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="resident", type="bigint", nullable=true)
     */
    private $resident;

    /**
     * @var int|null
     *
     * @ORM\Column(name="achievement_index", type="integer", nullable=true)
     */
    private $achievementIndex;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_pvp_zone", type="boolean", nullable=true)
     */
    private $isPvpZone;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_31", type="integer", nullable=true)
     */
    private $column31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_32", type="integer", nullable=true)
     */
    private $column32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_33", type="integer", nullable=true)
     */
    private $column33;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_35", type="boolean", nullable=true)
     */
    private $column35;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_36", type="boolean", nullable=true)
     */
    private $column36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_37", type="integer", nullable=true)
     */
    private $column37;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_38", type="boolean", nullable=true)
     */
    private $column38;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_39", type="boolean", nullable=true)
     */
    private $column39;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_40", type="boolean", nullable=true)
     */
    private $column40;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_41", type="boolean", nullable=true)
     */
    private $column41;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_42", type="boolean", nullable=true)
     */
    private $column42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_43", type="bigint", nullable=true)
     */
    private $column43;

    /**
     * @var MountSpeed
     *
     * @ORM\ManyToOne(targetEntity="MountSpeed")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mount_speed", referencedColumnName="pk")
     * })
     */
    private $mountSpeed;

    /**
     * @var ExVersion
     *
     * @ORM\ManyToOne(targetEntity="ExVersion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ex_version", referencedColumnName="pk")
     * })
     */
    private $exVersion;

    /**
     * @var Aetheryte
     *
     * @ORM\ManyToOne(targetEntity="Aetheryte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aetheryte", referencedColumnName="pk")
     * })
     */
    private $aetheryte;

    /**
     * @var QuestBattle
     *
     * @ORM\ManyToOne(targetEntity="QuestBattle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_battle", referencedColumnName="pk")
     * })
     */
    private $questBattle;

    /**
     * @var ArrayEventHandler
     *
     * @ORM\ManyToOne(targetEntity="ArrayEventHandler")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="array_event_handler", referencedColumnName="pk")
     * })
     */
    private $arrayEventHandler;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_finder_condition", referencedColumnName="pk")
     * })
     */
    private $contentFinderCondition;

    /**
     * @var LoadingImage
     *
     * @ORM\ManyToOne(targetEntity="LoadingImage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="loading_image", referencedColumnName="pk")
     * })
     */
    private $loadingImage;

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
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name", referencedColumnName="pk")
     * })
     */
    private $placeName;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_zone", referencedColumnName="pk")
     * })
     */
    private $placeNameZone;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_region", referencedColumnName="pk")
     * })
     */
    private $placeNameRegion;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBg(): ?string
    {
        return $this->bg;
    }

    public function setBg(?string $bg): self
    {
        $this->bg = $bg;

        return $this;
    }

    public function getBattalionMode(): ?int
    {
        return $this->battalionMode;
    }

    public function setBattalionMode(?int $battalionMode): self
    {
        $this->battalionMode = $battalionMode;

        return $this;
    }

    public function getExclusiveType(): ?int
    {
        return $this->exclusiveType;
    }

    public function setExclusiveType(?int $exclusiveType): self
    {
        $this->exclusiveType = $exclusiveType;

        return $this;
    }

    public function getTerritoryIntendedUse(): ?int
    {
        return $this->territoryIntendedUse;
    }

    public function setTerritoryIntendedUse(?int $territoryIntendedUse): self
    {
        $this->territoryIntendedUse = $territoryIntendedUse;

        return $this;
    }

    public function getColumn12(): ?bool
    {
        return $this->column12;
    }

    public function setColumn12(?bool $column12): self
    {
        $this->column12 = $column12;

        return $this;
    }

    public function getWeatherRate(): ?int
    {
        return $this->weatherRate;
    }

    public function setWeatherRate(?int $weatherRate): self
    {
        $this->weatherRate = $weatherRate;

        return $this;
    }

    public function getColumn14(): ?bool
    {
        return $this->column14;
    }

    public function setColumn14(?bool $column14): self
    {
        $this->column14 = $column14;

        return $this;
    }

    public function getColumn15(): ?int
    {
        return $this->column15;
    }

    public function setColumn15(?int $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }

    public function getPcsearch(): ?bool
    {
        return $this->pcsearch;
    }

    public function setPcsearch(?bool $pcsearch): self
    {
        $this->pcsearch = $pcsearch;

        return $this;
    }

    public function getStealth(): ?bool
    {
        return $this->stealth;
    }

    public function setStealth(?bool $stealth): self
    {
        $this->stealth = $stealth;

        return $this;
    }

    public function getMount(): ?bool
    {
        return $this->mount;
    }

    public function setMount(?bool $mount): self
    {
        $this->mount = $mount;

        return $this;
    }

    public function getColumn19(): ?bool
    {
        return $this->column19;
    }

    public function setColumn19(?bool $column19): self
    {
        $this->column19 = $column19;

        return $this;
    }

    public function getBgm(): ?int
    {
        return $this->bgm;
    }

    public function setBgm(?int $bgm): self
    {
        $this->bgm = $bgm;

        return $this;
    }

    public function getPlaceNameRegionIcon(): ?int
    {
        return $this->placeNameRegionIcon;
    }

    public function setPlaceNameRegionIcon(?int $placeNameRegionIcon): self
    {
        $this->placeNameRegionIcon = $placeNameRegionIcon;

        return $this;
    }

    public function getPlaceNameIcon(): ?int
    {
        return $this->placeNameIcon;
    }

    public function setPlaceNameIcon(?int $placeNameIcon): self
    {
        $this->placeNameIcon = $placeNameIcon;

        return $this;
    }

    public function getFixedTime(): ?int
    {
        return $this->fixedTime;
    }

    public function setFixedTime(?int $fixedTime): self
    {
        $this->fixedTime = $fixedTime;

        return $this;
    }

    public function getResident(): ?string
    {
        return $this->resident;
    }

    public function setResident(?string $resident): self
    {
        $this->resident = $resident;

        return $this;
    }

    public function getAchievementIndex(): ?int
    {
        return $this->achievementIndex;
    }

    public function setAchievementIndex(?int $achievementIndex): self
    {
        $this->achievementIndex = $achievementIndex;

        return $this;
    }

    public function getIsPvpZone(): ?bool
    {
        return $this->isPvpZone;
    }

    public function setIsPvpZone(?bool $isPvpZone): self
    {
        $this->isPvpZone = $isPvpZone;

        return $this;
    }

    public function getColumn31(): ?int
    {
        return $this->column31;
    }

    public function setColumn31(?int $column31): self
    {
        $this->column31 = $column31;

        return $this;
    }

    public function getColumn32(): ?int
    {
        return $this->column32;
    }

    public function setColumn32(?int $column32): self
    {
        $this->column32 = $column32;

        return $this;
    }

    public function getColumn33(): ?int
    {
        return $this->column33;
    }

    public function setColumn33(?int $column33): self
    {
        $this->column33 = $column33;

        return $this;
    }

    public function getColumn35(): ?bool
    {
        return $this->column35;
    }

    public function setColumn35(?bool $column35): self
    {
        $this->column35 = $column35;

        return $this;
    }

    public function getColumn36(): ?bool
    {
        return $this->column36;
    }

    public function setColumn36(?bool $column36): self
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

    public function getColumn38(): ?bool
    {
        return $this->column38;
    }

    public function setColumn38(?bool $column38): self
    {
        $this->column38 = $column38;

        return $this;
    }

    public function getColumn39(): ?bool
    {
        return $this->column39;
    }

    public function setColumn39(?bool $column39): self
    {
        $this->column39 = $column39;

        return $this;
    }

    public function getColumn40(): ?bool
    {
        return $this->column40;
    }

    public function setColumn40(?bool $column40): self
    {
        $this->column40 = $column40;

        return $this;
    }

    public function getColumn41(): ?bool
    {
        return $this->column41;
    }

    public function setColumn41(?bool $column41): self
    {
        $this->column41 = $column41;

        return $this;
    }

    public function getColumn42(): ?bool
    {
        return $this->column42;
    }

    public function setColumn42(?bool $column42): self
    {
        $this->column42 = $column42;

        return $this;
    }

    public function getColumn43(): ?string
    {
        return $this->column43;
    }

    public function setColumn43(?string $column43): self
    {
        $this->column43 = $column43;

        return $this;
    }

    public function getMountSpeed(): ?MountSpeed
    {
        return $this->mountSpeed;
    }

    public function setMountSpeed(?MountSpeed $mountSpeed): self
    {
        $this->mountSpeed = $mountSpeed;

        return $this;
    }

    public function getExVersion(): ?ExVersion
    {
        return $this->exVersion;
    }

    public function setExVersion(?ExVersion $exVersion): self
    {
        $this->exVersion = $exVersion;

        return $this;
    }

    public function getAetheryte(): ?Aetheryte
    {
        return $this->aetheryte;
    }

    public function setAetheryte(?Aetheryte $aetheryte): self
    {
        $this->aetheryte = $aetheryte;

        return $this;
    }

    public function getQuestBattle(): ?QuestBattle
    {
        return $this->questBattle;
    }

    public function setQuestBattle(?QuestBattle $questBattle): self
    {
        $this->questBattle = $questBattle;

        return $this;
    }

    public function getArrayEventHandler(): ?ArrayEventHandler
    {
        return $this->arrayEventHandler;
    }

    public function setArrayEventHandler(?ArrayEventHandler $arrayEventHandler): self
    {
        $this->arrayEventHandler = $arrayEventHandler;

        return $this;
    }

    public function getContentFinderCondition(): ?ContentFinderCondition
    {
        return $this->contentFinderCondition;
    }

    public function setContentFinderCondition(?ContentFinderCondition $contentFinderCondition): self
    {
        $this->contentFinderCondition = $contentFinderCondition;

        return $this;
    }

    public function getLoadingImage(): ?LoadingImage
    {
        return $this->loadingImage;
    }

    public function setLoadingImage(?LoadingImage $loadingImage): self
    {
        $this->loadingImage = $loadingImage;

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

    public function getPlaceName(): ?PlaceName
    {
        return $this->placeName;
    }

    public function setPlaceName(?PlaceName $placeName): self
    {
        $this->placeName = $placeName;

        return $this;
    }

    public function getPlaceNameZone(): ?PlaceName
    {
        return $this->placeNameZone;
    }

    public function setPlaceNameZone(?PlaceName $placeNameZone): self
    {
        $this->placeNameZone = $placeNameZone;

        return $this;
    }

    public function getPlaceNameRegion(): ?PlaceName
    {
        return $this->placeNameRegion;
    }

    public function setPlaceNameRegion(?PlaceName $placeNameRegion): self
    {
        $this->placeNameRegion = $placeNameRegion;

        return $this;
    }
}
