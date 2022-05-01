<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentsNote.
 *
 * @ORM\Table(name="contents_note", indexes={@ORM\Index(name="idx_9351b9041bcbaec", columns={"content_type"}), @ORM\Index(name="idx_9351b904951fd9b", columns={"how_to"})})
 * @ORM\Entity
 */
class ContentsNote
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="contents_note_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="menu_order", type="integer", nullable=true)
     */
    private $menuOrder;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_amount", type="integer", nullable=true)
     */
    private $requiredAmount;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_0", type="integer", nullable=true)
     */
    private $reward0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_multiplier", type="integer", nullable=true)
     */
    private $expMultiplier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_1", type="integer", nullable=true)
     */
    private $reward1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gil_rward", type="integer", nullable=true)
     */
    private $gilRward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_unlock", type="bigint", nullable=true)
     */
    private $levelUnlock;

    /**
     * @var int|null
     *
     * @ORM\Column(name="req_unlock", type="integer", nullable=true)
     */
    private $reqUnlock;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_cap", type="integer", nullable=true)
     */
    private $expCap;

    /**
     * @var HowTo
     *
     * @ORM\ManyToOne(targetEntity="HowTo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="how_to", referencedColumnName="pk")
     * })
     */
    private $howTo;

    /**
     * @var ContentsNoteCategory
     *
     * @ORM\ManyToOne(targetEntity="ContentsNoteCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_type", referencedColumnName="pk")
     * })
     */
    private $contentType;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getMenuOrder(): ?int
    {
        return $this->menuOrder;
    }

    public function setMenuOrder(?int $menuOrder): self
    {
        $this->menuOrder = $menuOrder;

        return $this;
    }

    public function getRequiredAmount(): ?int
    {
        return $this->requiredAmount;
    }

    public function setRequiredAmount(?int $requiredAmount): self
    {
        $this->requiredAmount = $requiredAmount;

        return $this;
    }

    public function getReward0(): ?int
    {
        return $this->reward0;
    }

    public function setReward0(?int $reward0): self
    {
        $this->reward0 = $reward0;

        return $this;
    }

    public function getExpMultiplier(): ?int
    {
        return $this->expMultiplier;
    }

    public function setExpMultiplier(?int $expMultiplier): self
    {
        $this->expMultiplier = $expMultiplier;

        return $this;
    }

    public function getReward1(): ?int
    {
        return $this->reward1;
    }

    public function setReward1(?int $reward1): self
    {
        $this->reward1 = $reward1;

        return $this;
    }

    public function getGilRward(): ?int
    {
        return $this->gilRward;
    }

    public function setGilRward(?int $gilRward): self
    {
        $this->gilRward = $gilRward;

        return $this;
    }

    public function getLevelUnlock(): ?string
    {
        return $this->levelUnlock;
    }

    public function setLevelUnlock(?string $levelUnlock): self
    {
        $this->levelUnlock = $levelUnlock;

        return $this;
    }

    public function getReqUnlock(): ?int
    {
        return $this->reqUnlock;
    }

    public function setReqUnlock(?int $reqUnlock): self
    {
        $this->reqUnlock = $reqUnlock;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getExpCap(): ?int
    {
        return $this->expCap;
    }

    public function setExpCap(?int $expCap): self
    {
        $this->expCap = $expCap;

        return $this;
    }

    public function getHowTo(): ?HowTo
    {
        return $this->howTo;
    }

    public function setHowTo(?HowTo $howTo): self
    {
        $this->howTo = $howTo;

        return $this;
    }

    public function getContentType(): ?ContentsNoteCategory
    {
        return $this->contentType;
    }

    public function setContentType(?ContentsNoteCategory $contentType): self
    {
        $this->contentType = $contentType;

        return $this;
    }
}
