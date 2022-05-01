<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adventure.
 *
 * @ORM\Table(name="adventure", indexes={@ORM\Index(name="idx_9e858e0f9aeacc13", columns={"level"}), @ORM\Index(name="idx_9e858e0f94960eea", columns={"place_name"}), @ORM\Index(name="idx_9e858e0f6bbc85c6", columns={"emote"})})
 * @ORM\Entity
 */
class Adventure
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="adventure_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_level", type="integer", nullable=true)
     */
    private $minLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_level", type="integer", nullable=true)
     */
    private $maxLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_time", type="bigint", nullable=true)
     */
    private $minTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_time", type="bigint", nullable=true)
     */
    private $maxTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_list", type="integer", nullable=true)
     */
    private $iconList;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_discovered", type="integer", nullable=true)
     */
    private $iconDiscovered;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=527, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="impression", type="string", length=527, nullable=true)
     */
    private $impression;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=527, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_undiscovered", type="integer", nullable=true)
     */
    private $iconUndiscovered;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_initial", type="boolean", nullable=true)
     */
    private $isInitial;

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
     * @var Emote
     *
     * @ORM\ManyToOne(targetEntity="Emote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="emote", referencedColumnName="pk")
     * })
     */
    private $emote;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level", referencedColumnName="pk")
     * })
     */
    private $level;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getMinLevel(): ?int
    {
        return $this->minLevel;
    }

    public function setMinLevel(?int $minLevel): self
    {
        $this->minLevel = $minLevel;

        return $this;
    }

    public function getMaxLevel(): ?int
    {
        return $this->maxLevel;
    }

    public function setMaxLevel(?int $maxLevel): self
    {
        $this->maxLevel = $maxLevel;

        return $this;
    }

    public function getMinTime(): ?string
    {
        return $this->minTime;
    }

    public function setMinTime(?string $minTime): self
    {
        $this->minTime = $minTime;

        return $this;
    }

    public function getMaxTime(): ?string
    {
        return $this->maxTime;
    }

    public function setMaxTime(?string $maxTime): self
    {
        $this->maxTime = $maxTime;

        return $this;
    }

    public function getIconList(): ?int
    {
        return $this->iconList;
    }

    public function setIconList(?int $iconList): self
    {
        $this->iconList = $iconList;

        return $this;
    }

    public function getIconDiscovered(): ?int
    {
        return $this->iconDiscovered;
    }

    public function setIconDiscovered(?int $iconDiscovered): self
    {
        $this->iconDiscovered = $iconDiscovered;

        return $this;
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

    public function getImpression(): ?string
    {
        return $this->impression;
    }

    public function setImpression(?string $impression): self
    {
        $this->impression = $impression;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIconUndiscovered(): ?int
    {
        return $this->iconUndiscovered;
    }

    public function setIconUndiscovered(?int $iconUndiscovered): self
    {
        $this->iconUndiscovered = $iconUndiscovered;

        return $this;
    }

    public function getIsInitial(): ?bool
    {
        return $this->isInitial;
    }

    public function setIsInitial(?bool $isInitial): self
    {
        $this->isInitial = $isInitial;

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

    public function getEmote(): ?Emote
    {
        return $this->emote;
    }

    public function setEmote(?Emote $emote): self
    {
        $this->emote = $emote;

        return $this;
    }

    public function getLevel(): ?Level
    {
        return $this->level;
    }

    public function setLevel(?Level $level): self
    {
        $this->level = $level;

        return $this;
    }
}
