<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MobHuntOrderType.
 *
 * @ORM\Table(name="mob_hunt_order_type", indexes={@ORM\Index(name="idx_8fb0d3404317f817", columns={"quest"}), @ORM\Index(name="idx_8fb0d340d069b5", columns={"event_item"})})
 * @ORM\Entity
 */
class MobHuntOrderType
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mob_hunt_order_type_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order_start", type="integer", nullable=true)
     */
    private $orderStart;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order_amount", type="integer", nullable=true)
     */
    private $orderAmount;

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
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest", referencedColumnName="pk")
     * })
     */
    private $quest;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getOrderStart(): ?int
    {
        return $this->orderStart;
    }

    public function setOrderStart(?int $orderStart): self
    {
        $this->orderStart = $orderStart;

        return $this;
    }

    public function getOrderAmount(): ?int
    {
        return $this->orderAmount;
    }

    public function setOrderAmount(?int $orderAmount): self
    {
        $this->orderAmount = $orderAmount;

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

    public function getQuest(): ?Quest
    {
        return $this->quest;
    }

    public function setQuest(?Quest $quest): self
    {
        $this->quest = $quest;

        return $this;
    }
}
