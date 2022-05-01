<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RetainerTaskNormal.
 *
 * @ORM\Table(name="retainer_task_normal", indexes={@ORM\Index(name="idx_cfb9105e1f1b251e", columns={"item"}), @ORM\Index(name="idx_cfb9105e5f9bef72", columns={"gathering_log"})})
 * @ORM\Entity
 */
class RetainerTaskNormal
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="retainer_task_normal_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_0", type="integer", nullable=true)
     */
    private $quantity0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_1", type="integer", nullable=true)
     */
    private $quantity1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_2", type="integer", nullable=true)
     */
    private $quantity2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_3", type="integer", nullable=true)
     */
    private $quantity3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_4", type="integer", nullable=true)
     */
    private $quantity4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fishing_log", type="integer", nullable=true)
     */
    private $fishingLog;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_log", referencedColumnName="pk")
     * })
     */
    private $gatheringLog;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item", referencedColumnName="pk")
     * })
     */
    private $item;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getQuantity0(): ?int
    {
        return $this->quantity0;
    }

    public function setQuantity0(?int $quantity0): self
    {
        $this->quantity0 = $quantity0;

        return $this;
    }

    public function getQuantity1(): ?int
    {
        return $this->quantity1;
    }

    public function setQuantity1(?int $quantity1): self
    {
        $this->quantity1 = $quantity1;

        return $this;
    }

    public function getQuantity2(): ?int
    {
        return $this->quantity2;
    }

    public function setQuantity2(?int $quantity2): self
    {
        $this->quantity2 = $quantity2;

        return $this;
    }

    public function getQuantity3(): ?int
    {
        return $this->quantity3;
    }

    public function setQuantity3(?int $quantity3): self
    {
        $this->quantity3 = $quantity3;

        return $this;
    }

    public function getQuantity4(): ?int
    {
        return $this->quantity4;
    }

    public function setQuantity4(?int $quantity4): self
    {
        $this->quantity4 = $quantity4;

        return $this;
    }

    public function getFishingLog(): ?int
    {
        return $this->fishingLog;
    }

    public function setFishingLog(?int $fishingLog): self
    {
        $this->fishingLog = $fishingLog;

        return $this;
    }

    public function getGatheringLog(): ?GatheringItem
    {
        return $this->gatheringLog;
    }

    public function setGatheringLog(?GatheringItem $gatheringLog): self
    {
        $this->gatheringLog = $gatheringLog;

        return $this;
    }

    public function getItem(): ?Item
    {
        return $this->item;
    }

    public function setItem(?Item $item): self
    {
        $this->item = $item;

        return $this;
    }
}
