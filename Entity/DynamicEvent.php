<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DynamicEvent.
 *
 * @ORM\Table(name="dynamic_event", indexes={@ORM\Index(name="idx_9cd853dce6d6dd75", columns={"announce"}), @ORM\Index(name="idx_9cd853dc97bf2a8", columns={"enemy_type"}), @ORM\Index(name="idx_9cd853dc4317f817", columns={"quest"}), @ORM\Index(name="idx_9cd853dc93151b82", columns={"event_type"}), @ORM\Index(name="idx_9cd853dcd9b251c0", columns={"single_battle"})})
 * @ORM\Entity
 */
class DynamicEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dynamic_event_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="integer", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgbevent_object", type="bigint", nullable=true)
     */
    private $lgbeventObject;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgbmap_range", type="bigint", nullable=true)
     */
    private $lgbmapRange;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="integer", nullable=true)
     */
    private $column8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=257, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=257, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_13", type="integer", nullable=true)
     */
    private $column13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_14", type="integer", nullable=true)
     */
    private $column14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_15", type="integer", nullable=true)
     */
    private $column15;

    /**
     * @var LogMessage
     *
     * @ORM\ManyToOne(targetEntity="LogMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="announce", referencedColumnName="pk")
     * })
     */
    private $announce;

    /**
     * @var DynamicEventSingleBattle
     *
     * @ORM\ManyToOne(targetEntity="DynamicEventSingleBattle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="single_battle", referencedColumnName="pk")
     * })
     */
    private $singleBattle;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest", referencedColumnName="pk")
     * })
     */
    private $quest;

    /**
     * @var DynamicEventEnemyType
     *
     * @ORM\ManyToOne(targetEntity="DynamicEventEnemyType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enemy_type", referencedColumnName="pk")
     * })
     */
    private $enemyType;

    /**
     * @var DynamicEventType
     *
     * @ORM\ManyToOne(targetEntity="DynamicEventType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_type", referencedColumnName="pk")
     * })
     */
    private $eventType;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn3(): ?int
    {
        return $this->column3;
    }

    public function setColumn3(?int $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getColumn4(): ?int
    {
        return $this->column4;
    }

    public function setColumn4(?int $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getLgbeventObject(): ?string
    {
        return $this->lgbeventObject;
    }

    public function setLgbeventObject(?string $lgbeventObject): self
    {
        $this->lgbeventObject = $lgbeventObject;

        return $this;
    }

    public function getLgbmapRange(): ?string
    {
        return $this->lgbmapRange;
    }

    public function setLgbmapRange(?string $lgbmapRange): self
    {
        $this->lgbmapRange = $lgbmapRange;

        return $this;
    }

    public function getColumn8(): ?int
    {
        return $this->column8;
    }

    public function setColumn8(?int $column8): self
    {
        $this->column8 = $column8;

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

    public function getColumn13(): ?int
    {
        return $this->column13;
    }

    public function setColumn13(?int $column13): self
    {
        $this->column13 = $column13;

        return $this;
    }

    public function getColumn14(): ?int
    {
        return $this->column14;
    }

    public function setColumn14(?int $column14): self
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

    public function getAnnounce(): ?LogMessage
    {
        return $this->announce;
    }

    public function setAnnounce(?LogMessage $announce): self
    {
        $this->announce = $announce;

        return $this;
    }

    public function getSingleBattle(): ?DynamicEventSingleBattle
    {
        return $this->singleBattle;
    }

    public function setSingleBattle(?DynamicEventSingleBattle $singleBattle): self
    {
        $this->singleBattle = $singleBattle;

        return $this;
    }

    public function getQuest(): ?Quest
    {
        return $this->quest;
    }

    public function setQuest(?Quest $quest): self
    {
        $this->quest = $quest;

        return $this;
    }

    public function getEnemyType(): ?DynamicEventEnemyType
    {
        return $this->enemyType;
    }

    public function setEnemyType(?DynamicEventEnemyType $enemyType): self
    {
        $this->enemyType = $enemyType;

        return $this;
    }

    public function getEventType(): ?DynamicEventType
    {
        return $this->eventType;
    }

    public function setEventType(?DynamicEventType $eventType): self
    {
        $this->eventType = $eventType;

        return $this;
    }
}
