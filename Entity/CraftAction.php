<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CraftAction.
 *
 * @ORM\Table(name="craft_action", indexes={@ORM\Index(name="idx_98822fc03bbeb33b", columns={"ltw"}), @ORM\Index(name="idx_98822fc0699169a7", columns={"wvr"}), @ORM\Index(name="idx_98822fc0bc323cef", columns={"animation_start"}), @ORM\Index(name="idx_98822fc08d519804", columns={"class_job"}), @ORM\Index(name="idx_98822fc0dcad5f7d", columns={"animation_end"}), @ORM\Index(name="idx_98822fc0ec6fc0a7", columns={"quest_requirement"}), @ORM\Index(name="idx_98822fc085c83367", columns={"gsm"}), @ORM\Index(name="idx_98822fc0f8dcc623", columns={"crp"}), @ORM\Index(name="idx_98822fc0985e7e94", columns={"arm"}), @ORM\Index(name="idx_98822fc0ae8947ec", columns={"class_job_category"}), @ORM\Index(name="idx_98822fc08303f18c", columns={"bsm"}), @ORM\Index(name="idx_98822fc0aba76c4c", columns={"alc"}), @ORM\Index(name="idx_98822fc0a39c0cab", columns={"cul"})})
 * @ORM\Entity
 */
class CraftAction
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="craft_action_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=735, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=735, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="class_job_level", type="integer", nullable=true)
     */
    private $classJobLevel;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="specialist", type="boolean", nullable=true)
     */
    private $specialist;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_11", type="bigint", nullable=true)
     */
    private $column11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cost", type="integer", nullable=true)
     */
    private $cost;

    /**
     * @var CraftAction
     *
     * @ORM\ManyToOne(targetEntity="CraftAction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cul", referencedColumnName="pk")
     * })
     */
    private $cul;

    /**
     * @var CraftAction
     *
     * @ORM\ManyToOne(targetEntity="CraftAction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alc", referencedColumnName="pk")
     * })
     */
    private $alc;

    /**
     * @var CraftAction
     *
     * @ORM\ManyToOne(targetEntity="CraftAction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="wvr", referencedColumnName="pk")
     * })
     */
    private $wvr;

    /**
     * @var CraftAction
     *
     * @ORM\ManyToOne(targetEntity="CraftAction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ltw", referencedColumnName="pk")
     * })
     */
    private $ltw;

    /**
     * @var CraftAction
     *
     * @ORM\ManyToOne(targetEntity="CraftAction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gsm", referencedColumnName="pk")
     * })
     */
    private $gsm;

    /**
     * @var CraftAction
     *
     * @ORM\ManyToOne(targetEntity="CraftAction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="arm", referencedColumnName="pk")
     * })
     */
    private $arm;

    /**
     * @var CraftAction
     *
     * @ORM\ManyToOne(targetEntity="CraftAction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bsm", referencedColumnName="pk")
     * })
     */
    private $bsm;

    /**
     * @var CraftAction
     *
     * @ORM\ManyToOne(targetEntity="CraftAction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="crp", referencedColumnName="pk")
     * })
     */
    private $crp;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_requirement", referencedColumnName="pk")
     * })
     */
    private $questRequirement;

    /**
     * @var ClassJobCategory
     *
     * @ORM\ManyToOne(targetEntity="ClassJobCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job_category", referencedColumnName="pk")
     * })
     */
    private $classJobCategory;

    /**
     * @var ClassJob
     *
     * @ORM\ManyToOne(targetEntity="ClassJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job", referencedColumnName="pk")
     * })
     */
    private $classJob;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="animation_end", referencedColumnName="pk")
     * })
     */
    private $animationEnd;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="animation_start", referencedColumnName="pk")
     * })
     */
    private $animationStart;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
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

    public function getClassJobLevel(): ?int
    {
        return $this->classJobLevel;
    }

    public function setClassJobLevel(?int $classJobLevel): self
    {
        $this->classJobLevel = $classJobLevel;

        return $this;
    }

    public function getSpecialist(): ?bool
    {
        return $this->specialist;
    }

    public function setSpecialist(?bool $specialist): self
    {
        $this->specialist = $specialist;

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

    public function getCost(): ?int
    {
        return $this->cost;
    }

    public function setCost(?int $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getCul(): ?self
    {
        return $this->cul;
    }

    public function setCul(?self $cul): self
    {
        $this->cul = $cul;

        return $this;
    }

    public function getAlc(): ?self
    {
        return $this->alc;
    }

    public function setAlc(?self $alc): self
    {
        $this->alc = $alc;

        return $this;
    }

    public function getWvr(): ?self
    {
        return $this->wvr;
    }

    public function setWvr(?self $wvr): self
    {
        $this->wvr = $wvr;

        return $this;
    }

    public function getLtw(): ?self
    {
        return $this->ltw;
    }

    public function setLtw(?self $ltw): self
    {
        $this->ltw = $ltw;

        return $this;
    }

    public function getGsm(): ?self
    {
        return $this->gsm;
    }

    public function setGsm(?self $gsm): self
    {
        $this->gsm = $gsm;

        return $this;
    }

    public function getArm(): ?self
    {
        return $this->arm;
    }

    public function setArm(?self $arm): self
    {
        $this->arm = $arm;

        return $this;
    }

    public function getBsm(): ?self
    {
        return $this->bsm;
    }

    public function setBsm(?self $bsm): self
    {
        $this->bsm = $bsm;

        return $this;
    }

    public function getCrp(): ?self
    {
        return $this->crp;
    }

    public function setCrp(?self $crp): self
    {
        $this->crp = $crp;

        return $this;
    }

    public function getQuestRequirement(): ?Quest
    {
        return $this->questRequirement;
    }

    public function setQuestRequirement(?Quest $questRequirement): self
    {
        $this->questRequirement = $questRequirement;

        return $this;
    }

    public function getClassJobCategory(): ?ClassJobCategory
    {
        return $this->classJobCategory;
    }

    public function setClassJobCategory(?ClassJobCategory $classJobCategory): self
    {
        $this->classJobCategory = $classJobCategory;

        return $this;
    }

    public function getClassJob(): ?ClassJob
    {
        return $this->classJob;
    }

    public function setClassJob(?ClassJob $classJob): self
    {
        $this->classJob = $classJob;

        return $this;
    }

    public function getAnimationEnd(): ?ActionTimeline
    {
        return $this->animationEnd;
    }

    public function setAnimationEnd(?ActionTimeline $animationEnd): self
    {
        $this->animationEnd = $animationEnd;

        return $this;
    }

    public function getAnimationStart(): ?ActionTimeline
    {
        return $this->animationStart;
    }

    public function setAnimationStart(?ActionTimeline $animationStart): self
    {
        $this->animationStart = $animationStart;

        return $this;
    }
}
