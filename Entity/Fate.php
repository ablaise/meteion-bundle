<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fate.
 *
 * @ORM\Table(name="fate", indexes={@ORM\Index(name="idx_97fff19544e3a0", columns={"required_quest"}), @ORM\Index(name="idx_97fff1cd52224a", columns={"music"}), @ORM\Index(name="idx_97fff119268970", columns={"fate_rule_ex"}), @ORM\Index(name="idx_97fff1ad0b0db2", columns={"screen_image_failed"}), @ORM\Index(name="idx_97fff1d069b5", columns={"event_item"}), @ORM\Index(name="idx_97fff17e9582d8", columns={"req_event_item"}), @ORM\Index(name="idx_97fff1c5844e47", columns={"screen_image_complete"}), @ORM\Index(name="idx_97fff1f3cc5dfa", columns={"turn_in_event_item"}), @ORM\Index(name="idx_97fff180a043f1", columns={"screen_image_accept"}), @ORM\Index(name="idx_97fff13b1b3509", columns={"given_status"}), @ORM\Index(name="idx_97fff180c5901", columns={"array_index"})})
 * @ORM\Entity
 */
class Fate
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fate_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=560, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=560, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objective", type="string", length=560, nullable=true)
     */
    private $objective;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_text_0", type="string", length=560, nullable=true)
     */
    private $statusText0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_text_1", type="string", length=560, nullable=true)
     */
    private $statusText1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_text_2", type="string", length=560, nullable=true)
     */
    private $statusText2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="eureka_fate", type="integer", nullable=true)
     */
    private $eurekaFate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rule", type="integer", nullable=true)
     */
    private $rule;

    /**
     * @var int|null
     *
     * @ORM\Column(name="location", type="bigint", nullable=true)
     */
    private $location;

    /**
     * @var int|null
     *
     * @ORM\Column(name="class_job_level", type="integer", nullable=true)
     */
    private $classJobLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="class_job_level_max", type="integer", nullable=true)
     */
    private $classJobLevelMax;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type_to_do_value_0", type="integer", nullable=true)
     */
    private $typeToDoValue0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type_to_do_value_1", type="integer", nullable=true)
     */
    private $typeToDoValue1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type_to_do_value_2", type="integer", nullable=true)
     */
    private $typeToDoValue2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_objective", type="integer", nullable=true)
     */
    private $iconObjective;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_map", type="integer", nullable=true)
     */
    private $iconMap;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_inactive_map", type="integer", nullable=true)
     */
    private $iconInactiveMap;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgbguard_npclocation", type="bigint", nullable=true)
     */
    private $lgbguardNpclocation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_25", type="integer", nullable=true)
     */
    private $column25;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="special_fate", type="boolean", nullable=true)
     */
    private $specialFate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_28", type="boolean", nullable=true)
     */
    private $column28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_30", type="bigint", nullable=true)
     */
    private $column30;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="advent_event", type="boolean", nullable=true)
     */
    private $adventEvent;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="moon_faire_event", type="boolean", nullable=true)
     */
    private $moonFaireEvent;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_33", type="boolean", nullable=true)
     */
    private $column33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fatechain", type="bigint", nullable=true)
     */
    private $fatechain;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_35", type="integer", nullable=true)
     */
    private $column35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_36", type="bigint", nullable=true)
     */
    private $column36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_38", type="bigint", nullable=true)
     */
    private $column38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_41", type="bigint", nullable=true)
     */
    private $column41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_42", type="bigint", nullable=true)
     */
    private $column42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_43", type="bigint", nullable=true)
     */
    private $column43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="objective_icon_0", type="integer", nullable=true)
     */
    private $objectiveIcon0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="objective_icon_1", type="integer", nullable=true)
     */
    private $objectiveIcon1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="objective_icon_2", type="integer", nullable=true)
     */
    private $objectiveIcon2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="objective_icon_3", type="integer", nullable=true)
     */
    private $objectiveIcon3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="objective_icon_4", type="integer", nullable=true)
     */
    private $objectiveIcon4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="objective_icon_5", type="integer", nullable=true)
     */
    private $objectiveIcon5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="objective_icon_6", type="integer", nullable=true)
     */
    private $objectiveIcon6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="objective_icon_7", type="integer", nullable=true)
     */
    private $objectiveIcon7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_52", type="bigint", nullable=true)
     */
    private $column52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_53", type="bigint", nullable=true)
     */
    private $column53;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="turn_in_event_item", referencedColumnName="pk")
     * })
     */
    private $turnInEventItem;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="req_event_item", referencedColumnName="pk")
     * })
     */
    private $reqEventItem;

    /**
     * @var ArrayEventHandler
     *
     * @ORM\ManyToOne(targetEntity="ArrayEventHandler")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="array_index", referencedColumnName="pk")
     * })
     */
    private $arrayIndex;

    /**
     * @var Status
     *
     * @ORM\ManyToOne(targetEntity="Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="given_status", referencedColumnName="pk")
     * })
     */
    private $givenStatus;

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
     * @var ScreenImage
     *
     * @ORM\ManyToOne(targetEntity="ScreenImage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="screen_image_failed", referencedColumnName="pk")
     * })
     */
    private $screenImageFailed;

    /**
     * @var ScreenImage
     *
     * @ORM\ManyToOne(targetEntity="ScreenImage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="screen_image_complete", referencedColumnName="pk")
     * })
     */
    private $screenImageComplete;

    /**
     * @var ScreenImage
     *
     * @ORM\ManyToOne(targetEntity="ScreenImage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="screen_image_accept", referencedColumnName="pk")
     * })
     */
    private $screenImageAccept;

    /**
     * @var Bgm
     *
     * @ORM\ManyToOne(targetEntity="Bgm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="music", referencedColumnName="pk")
     * })
     */
    private $music;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_item", referencedColumnName="pk")
     * })
     */
    private $eventItem;

    /**
     * @var FateRuleEx
     *
     * @ORM\ManyToOne(targetEntity="FateRuleEx")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fate_rule_ex", referencedColumnName="pk")
     * })
     */
    private $fateRuleEx;

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

    public function getObjective(): ?string
    {
        return $this->objective;
    }

    public function setObjective(?string $objective): self
    {
        $this->objective = $objective;

        return $this;
    }

    public function getStatusText0(): ?string
    {
        return $this->statusText0;
    }

    public function setStatusText0(?string $statusText0): self
    {
        $this->statusText0 = $statusText0;

        return $this;
    }

    public function getStatusText1(): ?string
    {
        return $this->statusText1;
    }

    public function setStatusText1(?string $statusText1): self
    {
        $this->statusText1 = $statusText1;

        return $this;
    }

    public function getStatusText2(): ?string
    {
        return $this->statusText2;
    }

    public function setStatusText2(?string $statusText2): self
    {
        $this->statusText2 = $statusText2;

        return $this;
    }

    public function getEurekaFate(): ?int
    {
        return $this->eurekaFate;
    }

    public function setEurekaFate(?int $eurekaFate): self
    {
        $this->eurekaFate = $eurekaFate;

        return $this;
    }

    public function getRule(): ?int
    {
        return $this->rule;
    }

    public function setRule(?int $rule): self
    {
        $this->rule = $rule;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

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

    public function getClassJobLevelMax(): ?int
    {
        return $this->classJobLevelMax;
    }

    public function setClassJobLevelMax(?int $classJobLevelMax): self
    {
        $this->classJobLevelMax = $classJobLevelMax;

        return $this;
    }

    public function getTypeToDoValue0(): ?int
    {
        return $this->typeToDoValue0;
    }

    public function setTypeToDoValue0(?int $typeToDoValue0): self
    {
        $this->typeToDoValue0 = $typeToDoValue0;

        return $this;
    }

    public function getTypeToDoValue1(): ?int
    {
        return $this->typeToDoValue1;
    }

    public function setTypeToDoValue1(?int $typeToDoValue1): self
    {
        $this->typeToDoValue1 = $typeToDoValue1;

        return $this;
    }

    public function getTypeToDoValue2(): ?int
    {
        return $this->typeToDoValue2;
    }

    public function setTypeToDoValue2(?int $typeToDoValue2): self
    {
        $this->typeToDoValue2 = $typeToDoValue2;

        return $this;
    }

    public function getIconObjective(): ?int
    {
        return $this->iconObjective;
    }

    public function setIconObjective(?int $iconObjective): self
    {
        $this->iconObjective = $iconObjective;

        return $this;
    }

    public function getIconMap(): ?int
    {
        return $this->iconMap;
    }

    public function setIconMap(?int $iconMap): self
    {
        $this->iconMap = $iconMap;

        return $this;
    }

    public function getIconInactiveMap(): ?int
    {
        return $this->iconInactiveMap;
    }

    public function setIconInactiveMap(?int $iconInactiveMap): self
    {
        $this->iconInactiveMap = $iconInactiveMap;

        return $this;
    }

    public function getLgbguardNpclocation(): ?string
    {
        return $this->lgbguardNpclocation;
    }

    public function setLgbguardNpclocation(?string $lgbguardNpclocation): self
    {
        $this->lgbguardNpclocation = $lgbguardNpclocation;

        return $this;
    }

    public function getColumn25(): ?int
    {
        return $this->column25;
    }

    public function setColumn25(?int $column25): self
    {
        $this->column25 = $column25;

        return $this;
    }

    public function getSpecialFate(): ?bool
    {
        return $this->specialFate;
    }

    public function setSpecialFate(?bool $specialFate): self
    {
        $this->specialFate = $specialFate;

        return $this;
    }

    public function getColumn28(): ?bool
    {
        return $this->column28;
    }

    public function setColumn28(?bool $column28): self
    {
        $this->column28 = $column28;

        return $this;
    }

    public function getColumn30(): ?string
    {
        return $this->column30;
    }

    public function setColumn30(?string $column30): self
    {
        $this->column30 = $column30;

        return $this;
    }

    public function getAdventEvent(): ?bool
    {
        return $this->adventEvent;
    }

    public function setAdventEvent(?bool $adventEvent): self
    {
        $this->adventEvent = $adventEvent;

        return $this;
    }

    public function getMoonFaireEvent(): ?bool
    {
        return $this->moonFaireEvent;
    }

    public function setMoonFaireEvent(?bool $moonFaireEvent): self
    {
        $this->moonFaireEvent = $moonFaireEvent;

        return $this;
    }

    public function getColumn33(): ?bool
    {
        return $this->column33;
    }

    public function setColumn33(?bool $column33): self
    {
        $this->column33 = $column33;

        return $this;
    }

    public function getFatechain(): ?string
    {
        return $this->fatechain;
    }

    public function setFatechain(?string $fatechain): self
    {
        $this->fatechain = $fatechain;

        return $this;
    }

    public function getColumn35(): ?int
    {
        return $this->column35;
    }

    public function setColumn35(?int $column35): self
    {
        $this->column35 = $column35;

        return $this;
    }

    public function getColumn36(): ?string
    {
        return $this->column36;
    }

    public function setColumn36(?string $column36): self
    {
        $this->column36 = $column36;

        return $this;
    }

    public function getColumn38(): ?string
    {
        return $this->column38;
    }

    public function setColumn38(?string $column38): self
    {
        $this->column38 = $column38;

        return $this;
    }

    public function getColumn41(): ?string
    {
        return $this->column41;
    }

    public function setColumn41(?string $column41): self
    {
        $this->column41 = $column41;

        return $this;
    }

    public function getColumn42(): ?string
    {
        return $this->column42;
    }

    public function setColumn42(?string $column42): self
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

    public function getObjectiveIcon0(): ?int
    {
        return $this->objectiveIcon0;
    }

    public function setObjectiveIcon0(?int $objectiveIcon0): self
    {
        $this->objectiveIcon0 = $objectiveIcon0;

        return $this;
    }

    public function getObjectiveIcon1(): ?int
    {
        return $this->objectiveIcon1;
    }

    public function setObjectiveIcon1(?int $objectiveIcon1): self
    {
        $this->objectiveIcon1 = $objectiveIcon1;

        return $this;
    }

    public function getObjectiveIcon2(): ?int
    {
        return $this->objectiveIcon2;
    }

    public function setObjectiveIcon2(?int $objectiveIcon2): self
    {
        $this->objectiveIcon2 = $objectiveIcon2;

        return $this;
    }

    public function getObjectiveIcon3(): ?int
    {
        return $this->objectiveIcon3;
    }

    public function setObjectiveIcon3(?int $objectiveIcon3): self
    {
        $this->objectiveIcon3 = $objectiveIcon3;

        return $this;
    }

    public function getObjectiveIcon4(): ?int
    {
        return $this->objectiveIcon4;
    }

    public function setObjectiveIcon4(?int $objectiveIcon4): self
    {
        $this->objectiveIcon4 = $objectiveIcon4;

        return $this;
    }

    public function getObjectiveIcon5(): ?int
    {
        return $this->objectiveIcon5;
    }

    public function setObjectiveIcon5(?int $objectiveIcon5): self
    {
        $this->objectiveIcon5 = $objectiveIcon5;

        return $this;
    }

    public function getObjectiveIcon6(): ?int
    {
        return $this->objectiveIcon6;
    }

    public function setObjectiveIcon6(?int $objectiveIcon6): self
    {
        $this->objectiveIcon6 = $objectiveIcon6;

        return $this;
    }

    public function getObjectiveIcon7(): ?int
    {
        return $this->objectiveIcon7;
    }

    public function setObjectiveIcon7(?int $objectiveIcon7): self
    {
        $this->objectiveIcon7 = $objectiveIcon7;

        return $this;
    }

    public function getColumn52(): ?string
    {
        return $this->column52;
    }

    public function setColumn52(?string $column52): self
    {
        $this->column52 = $column52;

        return $this;
    }

    public function getColumn53(): ?string
    {
        return $this->column53;
    }

    public function setColumn53(?string $column53): self
    {
        $this->column53 = $column53;

        return $this;
    }

    public function getTurnInEventItem(): ?EventItem
    {
        return $this->turnInEventItem;
    }

    public function setTurnInEventItem(?EventItem $turnInEventItem): self
    {
        $this->turnInEventItem = $turnInEventItem;

        return $this;
    }

    public function getReqEventItem(): ?EventItem
    {
        return $this->reqEventItem;
    }

    public function setReqEventItem(?EventItem $reqEventItem): self
    {
        $this->reqEventItem = $reqEventItem;

        return $this;
    }

    public function getArrayIndex(): ?ArrayEventHandler
    {
        return $this->arrayIndex;
    }

    public function setArrayIndex(?ArrayEventHandler $arrayIndex): self
    {
        $this->arrayIndex = $arrayIndex;

        return $this;
    }

    public function getGivenStatus(): ?Status
    {
        return $this->givenStatus;
    }

    public function setGivenStatus(?Status $givenStatus): self
    {
        $this->givenStatus = $givenStatus;

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

    public function getScreenImageFailed(): ?ScreenImage
    {
        return $this->screenImageFailed;
    }

    public function setScreenImageFailed(?ScreenImage $screenImageFailed): self
    {
        $this->screenImageFailed = $screenImageFailed;

        return $this;
    }

    public function getScreenImageComplete(): ?ScreenImage
    {
        return $this->screenImageComplete;
    }

    public function setScreenImageComplete(?ScreenImage $screenImageComplete): self
    {
        $this->screenImageComplete = $screenImageComplete;

        return $this;
    }

    public function getScreenImageAccept(): ?ScreenImage
    {
        return $this->screenImageAccept;
    }

    public function setScreenImageAccept(?ScreenImage $screenImageAccept): self
    {
        $this->screenImageAccept = $screenImageAccept;

        return $this;
    }

    public function getMusic(): ?Bgm
    {
        return $this->music;
    }

    public function setMusic(?Bgm $music): self
    {
        $this->music = $music;

        return $this;
    }

    public function getEventItem(): ?EventItem
    {
        return $this->eventItem;
    }

    public function setEventItem(?EventItem $eventItem): self
    {
        $this->eventItem = $eventItem;

        return $this;
    }

    public function getFateRuleEx(): ?FateRuleEx
    {
        return $this->fateRuleEx;
    }

    public function setFateRuleEx(?FateRuleEx $fateRuleEx): self
    {
        $this->fateRuleEx = $fateRuleEx;

        return $this;
    }
}
